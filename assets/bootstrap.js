// assets/bootstrap.js
// Safe, brand‑styled bootstrap for IntruNex — no hard Stimulus dependency

// Attempt to load Stimulus controllers only if they exist
(async () => {
    try {
        await import('./controllers');
        console.log('%cStimulus controllers loaded', 'color:#00ff00;');
    } catch {
        console.warn('No Stimulus controllers found — continuing without them');
    }
})();

// Global styles import (your Matrix theme)
import './styles/matrix.css';

// Optional: Any global JS setup
console.log('%cIntruNex UI initialized', 'color:#00ff00; font-weight:bold;');
