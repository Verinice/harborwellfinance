import './bootstrap';
import { createIcons, icons } from 'lucide';

const initIcons = () => {
    createIcons({
        icons,
        attrs: {
            'stroke-width': 1.7,
        },
    });
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initIcons);
} else {
    initIcons();
}
