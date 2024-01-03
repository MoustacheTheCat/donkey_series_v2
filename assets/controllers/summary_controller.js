import { Controller } from '@hotwired/stimulus';


export default class extends Controller {
    static targets = ['summaryText']
    static outlets = ['text-summary']
    selectAll(event) {
        this.textSummaryOutlets.forEach(function(summary){
            
            console.log("🚀 ~ file: summary_controller.js:10 ~ extends ~ selectAll ~ summary:", summary.innerHTML)
            // let text = summary.textContent;
            // let words = text.split(" ");
            // if (words.length > 20) {
            //     let shortenedText = words.slice(0, 20).join(" ") + " ...";
            //     summary.textContent = shortenedText;
            // }
        });
        // console.log("🚀 ~ file: summary_controller.js:10 ~ extends ~ selectAll ~ this.textSummaryOutlets:", this.textSummaryOutlets)
    }
       
    // connect() {
    //     const summaryText = this.textSummaryOutletElements;
    //     console.log("🚀 ~ file: summary_controller.js:12 ~ extends ~ connect ~ summaryText:", summaryText)
    //     // summaries.forEach(function(summary) {
    //     //     let text = summary.textContent;
    //     //     let words = text.split(" ");
    //     //     if (words.length > 20) {
    //     //         let shortenedText = words.slice(0, 20).join(" ") + " ...";
    //     //         summary.textContent = shortenedText;
    //     //     }
    //     //     });
    // }
   
}
