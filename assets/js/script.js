(function($, window) {
    $('#owl-vitrine').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 0,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-video').owlCarousel({
        center: true,
        loop: true,
        autoplay: false,
        margin: 10,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    $(document).ready(function() {
        $('.hamburger').on("click",function(){
            $('.hamburger').toggleClass('open-menu');
            $('.drawer').toggleClass('open-drawer');
            $('.wrapper').toggleClass('open-wrapper');
        })
    });
    $(window).scroll(function(){
        if($(window).scrollTop() >= 100)
        {
            $('.titulo-interno').addClass('fixo').fadeIn();
        }else{
            $('.titulo-interno').removeClass('fixo');
        }  
    });

    $("#_form_contato").on("submit", function( event ) {
        event.preventDefault();

        var $callbacks = $("#_contato_callbacks");
        var formData = new FormData();

        formData.append("action", "contato");
        formData.append("nome", $("#contato_nome").val());
        formData.append("email", $("#contato_email").val());
        formData.append("mensagem", $("#contato_mensagem").val());

        $.ajax({
            type: "post",
            url: ajaxurl,
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            beforeSend: function() {
                $callbacks.find(".alert").remove();
            },
            success: function(res) {
                if ( res.erros ) {
                    $callbacks.prepend(createAlert('danger', res.erros[0]));
                } else {
                    // clearValues(["#contato_nome", "#contato_email", "#contato_assunto", "#contato_mensagem"]);
                    $callbacks.prepend(createAlert('success', 'Contato enviado com sucesso. Em breve entraremos em contato através dos dados informados no formulário.'));
                }
            },
            error: function(res) {
                $callbacks.prepend(createAlert('danger', 'ops, estamos com problemas em nosso servidor. tente de novo mais tarde.'));
            },
            complete: function(res) {
                console.log("complete");
                $("html, body").animate({ scrollTop: $("#_form_contato").offset().top-100 }, 600);
            }
        });
    });
})(jQuery, window);