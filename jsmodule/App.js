import Slide from './Slide';
import $ from 'jquery';

export default class App {
    constructor(){
        this.makeSlider();
        this.addEventList();
    }
    makeToast(msg){
        const template =
         `<div class="my-toast bg-info">
            <div class="content">${msg}</div>
        </div>`;
        let toast = $(template).appendTo($("#toastList"));
        setTimeout(()=>{
            toast.fadeOut();
        },2000);
    }
    addEventList(){
        $("body").click(function(e){
            if($(e.target).hasClass("btnSubmenu")){
                $("#submenu").show("slow");
            }else {
                $("#submenu").hide("slow");
            }         
        });
    }

    makeSlider(){
        this.slide = new Slide();
    }
}