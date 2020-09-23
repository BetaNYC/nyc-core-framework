//////////////////////////////////////////////
// Backdrop
//////////////////////////////////////////////

export default class Backdrop {

    constructor() {

        var isIE11 = !!(navigator.userAgent.match(/Trident/) && !navigator.userAgent.match(/MSIE/));

        if (isIE11) {

            const backdropList = document.querySelectorAll(".backdrop--fixed");

            backdropList.forEach((backdrop) => {
            
                let backdropHeight = backdrop.scrollHeight;
                let backdropCoverHeight = backdrop.querySelector(".backdrop__cover").scrollHeight;
    
                if (backdropCoverHeight < backdropHeight) {
                    backdrop.style.height = backdropHeight + "px";
                }

            });

        }
    }
}