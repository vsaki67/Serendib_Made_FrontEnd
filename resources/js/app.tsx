import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createRoot } from 'react-dom/client';
import { initializeTheme } from './hooks/use-appearance';
import setupNavbar from './shared';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => title ? `${title} - ${appName}` : appName,
    resolve: (name) => resolvePageComponent(`./pages/${name}.tsx`, import.meta.glob('./pages/**/*.tsx')),
    setup({ el, App, props }) {
        const root = createRoot(el);
        root.render(<App {...props} />);
        
        // Setup navbar after initial render
        setupNavbar();
    },
    progress: {
        color: '#4B5563',
    },
});

// Listen for Inertia navigation events
window.addEventListener('inertia:navigate', () => {
    // Small delay to ensure DOM is updated
    setTimeout(setupNavbar, 50);
});

initializeTheme();