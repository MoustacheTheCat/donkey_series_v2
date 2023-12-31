import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.scss'

document.addEventListener("DOMContentLoaded", function() {
    let summaries = document.querySelectorAll(".summary");
    summaries.forEach(function(summary) {
    let text = summary.textContent;
    let words = text.split(" ");
    if (words.length > 20) {
        let shortenedText = words.slice(0, 20).join(" ") + " ...";
        summary.textContent = shortenedText;
    }
    });
});
