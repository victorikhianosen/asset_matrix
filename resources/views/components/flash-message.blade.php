 <style>
        .flash-message {
            position: fixed;
            top: 20px;
            right: -400px;
            /* Start off-screen */
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            border: 3px;
            border-color: #fff;
            font-size: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            transition: right 0.5s ease-in-out;
        }

        .flash-message.success {
            background-color: #F77A10;
            /* Green for success */
        }

        .flash-message.error {
            background-color: #dc3545;
            /* Red for error */
        }

        .flash-message.slide-in {
            right: 20px;
            /* Slide into view */
        }

        .flash-message.slide-out {
            right: -400px;
            /* Slide out of view */
        }
    </style>

    @if (session('success'))
        <div id="flash-message" class="flash-message success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div id="flash-message" class="flash-message error">
            {{ session('error') }}
        </div>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const flashMessage = document.getElementById('flash-message');

            if (flashMessage) {
                // Slide the message in
                flashMessage.classList.add('slide-in');

                // Slide the message out after 5 seconds
                setTimeout(function() {
                    flashMessage.classList.remove('slide-in');
                    flashMessage.classList.add('slide-out');
                }, 5000);
            }
        });
    </script>