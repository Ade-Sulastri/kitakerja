import Swiper, { Pagination, EffectFade, Mousewheel } from "swiper";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/effect-fade";
const swiper = new Swiper(".blog-slider", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    mousewheel: {
        invert: false,
    },
    pagination: {
        el: ".blog-slider__pagination",
        clickable: true,
    },
});
