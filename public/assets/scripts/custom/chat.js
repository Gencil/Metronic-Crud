var Chat = function () {

    return {

        initChat: function () {
            var cont = $('#chats');
            var list = $('.chats', cont);
            var form = $('.chat-form', cont);
            var input = $('input', form);
            var btn = $('.btn', form);

            var handleClick = function (e) {
                e.preventDefault();
                
                var text = input.val();
                if (text.length == 0) {
                    return;
                }

                var time = new Date();
                var time_str = time.toString('MMM dd, yyyy hh:mm');
                var tpl = '';
                tpl += '<li class="out">';
                tpl += '<img class="avatar" alt="" src="./public/assets/img/avatar1.jpg"/>';
                tpl += '<div class="message">';
                tpl += '<span class="arrow"></span>';
                tpl += '<a href="#" class="name">Bob Nilson</a>&nbsp;';
                tpl += '<span class="datetime">at ' + time_str + '</span>';
                tpl += '<span class="body">';
                tpl += text;
                tpl += '</span>';
                tpl += '</div>';
                tpl += '</li>';

                var msg = list.append(tpl);
                input.val("");
                $('.scroller', cont).slimScroll({
                    scrollTo: list.height()
                });
            }

            /*
            $('.scroller', cont).slimScroll({
                scrollTo: list.height()
            });
            */

            $('body').on('click', '.message .name', function(e){
                e.preventDefault(); // prevent click event

                var name = $(this).text(); // get clicked user's full name
                input.val('@' +  name + ':'); // set it into the input field
                App.scrollTo(input); // scroll to input if needed
            });

            btn.click(handleClick);
            input.keypress(function (e) {
                if (e.which == 13) {
                    handleClick();
                    return false; //<---- Add this line
                }
            });
        }
    };

}();