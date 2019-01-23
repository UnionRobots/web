$(document).ready(function () {
    var langLink, langLinkAttr, uri = window.location.pathname;
    langLink = $('header ul#top-menu li:last-child a');
    langLinkAttr = langLink.attr('href');
    uri = ($('body').hasClass('ru_lang') ? uri = uri.replace('/ru','') : uri = uri.substring(1));
    langLinkAttr = langLinkAttr + uri;
    langLink.attr('href', langLinkAttr);

    var sum, numberPeople = 1, sliderWorkers;
    sliderWorkers = $('.slide-workers').slider({
        ticks: [1, 3, 7, 10, 15, 20, 25, 30, 40, 50, 60],
        ticks_positions: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
        ticks_snap_bounds: 200,
        formatter: function(value) {
            numberPeople = value;
            return 'Current value: ' + value;
        },
        ticks_tooltip: true,
        step: 1
    }).on('change', function() {
        $('.value--workers').val(numberPeople);
        summWorkers($(this).val())
    });

    var workers = $('.value--workers'), workersVal;
    workers.on('change paste keyup', function () {
        workersVal = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(workersVal);
        sliderWorkers.slider('setValue', workersVal);
        summWorkers($(this).val())
    });

    function summWorkers(number) {
        if (number > 100) {
            $('.sum-profit span.sum-profit--descr--first').text('');
            $('.sum-profit span.sum-profit--descr').text('Уточните у нашего менеджера');
            $('.sum-profit span.sum-profit--value').text('');
            $('input[name=summ]').val('Более 100');
            $('input[name=workers]').val('Более 100');
        }
        else {
            $('.value--workers--text').text(number);
            sum = (((35000*number)/2.5)*100)*0.05;
            $('input[name=summ]').val(sum);
            $('input[name=workers]').val(number);

            sum = sum.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1 ");
            $('.sum-profit span.sum-profit--value').text(sum);
            $('.sum-profit span.sum-profit--descr').text(' руб. в месяц');
            $('.sum-profit span.sum-profit--descr--first').text('до ');
        }
    }
    sliderWorkers.slider('setValue', workers.val());
    summWorkers(workers.val());

    jQuery('.input-phone').mask("+7(999) 999-99-99", {
        completed: function () {
            jQuery('.sendFormLesson').removeClass('disabled');
        }
    });

    $('.modal-offer').on('shown.bs.modal', function (e) {
        var button = $(e.relatedTarget);
        var recipient = button.data('title');

        $(this).find('.modal-title').text(recipient)
    })
});