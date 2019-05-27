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
$('.lista-acao a').popover({
    trigger: 'hover',
    placement: 'top'
});
