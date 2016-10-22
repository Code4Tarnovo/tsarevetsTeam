  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nickname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: '<b>Hе сте въвели Псевдоним</b>'
                    }
                }
            },
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: '<b>Hе сте въвели собственото си име</b>'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: '<b>Hе сте въвели фамилното си име</b>'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: '<b>Hе сте въвели вашия имейл адрес</b>'
                    },
                    emailAddress: {
                        message: '<b>Моля въведете валиден имейл адрес</b>'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: '<b>Не сте въвели телефон за контакти</b>'
                    },
                    phone: {
                        country: 'BG',
                        message: '<b>Моля въведете валиден телефонен номер</b>'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            message: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 255,
                        message:'<b>Моля въведете текст с минимум 10 и максимум 255 символа</b>'
                    },
                    notEmpty: {
                        message: '<b>Не сте въвели съобщение</b>'
                    }
                    }
                },
            subject: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 255,
                        message:'<b>Моля въведете текст с минимум 10 и максимум 255 символа</b>'
                    },
                    notEmpty: {
                        message: '<b>Не сте въвели съобщение</b>'
                    }
                    }
                },
            signature: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 255,
                        message:'<b>Моля въведете текст с минимум 10 и максимум 255 символа</b>'
                    },
                    notEmpty: {
                        message: '<b>Не сте въвели съобщение</b>'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

