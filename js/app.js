//jetform send form
$('#jetform').jetform({
    token:'0735b9653544b14722d5debff45333ee4d',
    url: 'https://hoverlead.com/lead/save',
    errorSelector: '#jf-err',
    spinner: {
    active: true,
    width: '50px',
    height: '50px',
    color: '#fff'
  },
  onError: function(errors){
  var getError= $('#jf-err').text();
  switch (getError) {
    case 'שם מלא שדה חובה':
      $("#jf-err").attr('title', 'יש לכתוב שם מלא ');
      $("#jf-err").text('יש לכתוב שם מלא');
      break;
      case 'טלפון שדה חובה':
      $("#jf-err").attr('title', 'יש להזין מספר טלפון תקין ');
      $("#jf-err").text('יש להזין מספר טלפון תקין ');
      break;
      case 'קוד הגרלה שדה חובה':
      $("#jf-err").attr('title', 'יש להזין קוד הגרלה');
      $("#jf-err").text('יש להזין קוד הגרלה');
      break;
    default:

  }
},
beforeSubmit: function(args){
    $args = args;
},
    onSuccess: function(){
      $('#jetform').css("display","none");
      $('#thankYouBlock').css("display","block");

  //$('.form_wrap,#footer').css("display","none");
    },
    onFail: function(message, response){
        if (response.indexOf("reason=invalid") > -1) {
            $("#jf-err").attr('title', 'שם מלא מכיל ערך לא תקין ');
            $("#jf-err").text('שם מלא מכיל ערך לא תקין');
            $("#jf-err").show();

            $.each($args, function(index, item){
                $('input[name="' + index +'"]').val(item);

                if($('input[name="' + index +'"]').is(':checkbox')) {
                    $('input[name="' + index +'"]').prop('checked', item);
                }
            });
        }
    }
    });
