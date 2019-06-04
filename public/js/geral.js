// MENU LATERAL
$('.btn-com-sub').click(function() {
    let $subnav = $(this).siblings('.sub-nav');
    let $seta   = $(this).find('.icon-sub-nav');
    if ($subnav.length) {
        if ($subnav.is(':visible')) $seta.html('<i class="fas fa-angle-right"></i>');
        else $seta.html('<i class="fas fa-angle-down"></i>');
        $subnav.slideToggle(50);
    }
});

// POPOVER
$('.lista-acao a, .lista-export a').popover({
    trigger: 'hover',
    placement: 'top'
});


$('.lista-nav').on('mouseout', function(event) {
    let els = $(document.elementsFromPoint(event.offsetX, event.offsetY));
    if (!els.is('.lista-nav') && els.length) hideMenu();
});

// ESCODE SUB-MENUS
function hideMenu() {
    let $subnav = $('.sub-nav');
    let $seta   = $('.icon-sub-nav');

    $subnav.slideUp(125);
    $seta.html('<i class="fas fa-angle-right"></i>');
}

$('.nav-link').click(function(event) {
    event.preventDefault();
    location = this.hash;
});
