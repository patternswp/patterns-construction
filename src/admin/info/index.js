/* CSS */
import './index.scss';

/* WordPress */
import apiFetch from '@wordpress/api-fetch';

/* Local */
class PatternsConstructionPluginApi {
    constructor() {
        this.nonce = PatternsConstructionLocalize.nonce;
        this.bindEvents();
    }

    bindEvents() {
        document.addEventListener('click', (event) => {
            if (event.target.classList.contains('patterns-construction-install-plugin')) {
                event.target.classList.add("patterns-construction-processing");
                this.installPlugin(event.target);
            }
        });
    }

    async installPlugin(el) {
        const pluginData = el.dataset.plugin;
        const plugin = JSON.parse(pluginData);
        try {
            const result = await apiFetch({
                path: 'patterns-construction/v1/install-plugin',
                method: 'POST',
                data: plugin,
                headers: {
                    'X-WP-Nonce': this.nonce
                }
            });
            if (result) {
                if (result.success) {
                    el.innerText = el.dataset.successText;
                    el.disabled = true;
                    el.classList.remove('patterns-construction-install-plugin');
                } else {
                    el.innerText = el.dataset.failText;
                }
            }
        } catch (error) {
            console.error(error);
            el.innerText = el.dataset.failText;
        }
        el.classList.remove("patterns-construction-processing");
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new PatternsConstructionPluginApi();
});
