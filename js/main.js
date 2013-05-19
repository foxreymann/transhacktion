    $("#imageupload").on("click", function() {
        $("#imageinput").click();
        
        setTimeout(function(){ $("#imageupload").attr('src','img/products/1.png')},5000);
});

$('input[name=photo]').change(function(e) {
            var file = e.target.files[0];

            $.canvasResize(file, {
                width: 300,
                height: 0,
                crop: false,
                quality: 80,
                //rotate: 90,
                callback: function(data, width, height) {

                    //console.log(data);
                    var target = document.getElementById('sell');
                    var spinner = new Spinner({color:'#fff', lines: 12}).spin(target);

                    $('<img>').attr('src', data).appendTo('body');

                    $("#footersell").hide();
                    $("#footeruploading").show();



                    var newdata = data.replace("data:image/jpeg;base64", "");

                    filepicker.store(newdata, {filename: 'MyCoolPhoto.jpg', mimetype: 'image/jpeg', base64decode: true}, function(FPFile){
                            //console.log("Store successful:", JSON.stringify(FPFile));
                            spinner.stop();
                            //$("#fromFilepicker").attr("src", FPFile.url);

                            $("#footeruploading").hide();
                            $("#footersubmit").show();

                            var date = new Date().getTime();
                            var price = $("#price").val();
                            var description = $("#description").val();
                            messagesRef.push({date:date, price:price, description:description, url : FPFile});

                            g_Date = date;
                            $('<a class="viewmine"><h3>View and share your photo<h3></a>').attr("href", "/#viewmine?date=" + date).prependTo($('.links'));


                        }, function(FPError) {
                            console.log(FPError.toString());
                        }, function(progress) {
                            console.log("Loading: "+progress+"%");
                        }
                    );     

                }
            });
        });
