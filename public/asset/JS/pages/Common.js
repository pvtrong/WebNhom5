$(document).ready(function () {
    var common = new Common();

})
class Common {
    constructor() {
        this.initEvents();
    }
    initEvents() {
        $(".account").click(this.boxAccount.bind(this));
    }


    boxAccount() {
        if ($(".box-account").is(":hidden")) {

            this.showAccountBox();
        }
        else this.hideAccountBox();
    }

    showAccountBox() {
        $(".box-account").show();
    }
    hideAccountBox() {
        $(".box-account").hide();
    }
}

