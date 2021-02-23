//Wizard Init
var form = $("form");

$("#wizard").steps({
        /* Behaviour */
        autoFocus: false,
        enableAllSteps: false,
        enableKeyNavigation: true,
        enablePagination: true,
        suppressPaginationOnFocus: true,
        enableContentCache: true,
        enableCancelButton: false,
        enableFinishButton: true,
        preloadContent: false,
        showFinishButtonAlways: false,
        forceMoveForward: false,
        saveState: false,
        startIndex: 0,
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "none",
    stepsOrientation: "vertical",
    titleTemplate: '<span class="number">#index# </span>',
 
    loadingTemplate: '<span class="spinner"></span> #text#',

    transitionEffectSpeed: 300,
    transitionEffect: "slide",
    labels: {
        previous: 'Voltar',
        next: 'Próximo',
        finish: 'Verificar resultado',
        current: '',
        loading: 'carregando'
    },

    
 
    onFinished: function (event, currentIndex) {
       form.submit();
       
 
},

onStepChanging: function (event, currentIndex, newIndex) { return true;
 },
onContentLoaded: function (event, currentIndex) { 
    
}

});




//Form control

$('.purpose-radio-input').on('change', function(e) {
    $('#business-type').text(e.target.value);
});

$('#firstName').on('change', function(e) {
    $('#enteredFirstName').text(e.target.value || 'Cha');
});

$('#lastName').on('change', function(e) {
    $('#enteredLastName').text(e.target.value || 'Ji-Hun C');
});

$('#phoneNumber').on('change', function(e) {
    $('#enteredPhoneNumber').text(e.target.value || '+230-582-6609');
});

$('#emailAddress').on('change', function(e) {
    $('#enteredEmailAddress').text(e.target.value || 'willms_abby@gmail.com');
});

