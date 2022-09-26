
const displayForm = _('displayForm');
            const forLogin = _('forLogin');
            const formLogin = _('loginForm');
            const forRegister = _('forRegister');
            const formRegister = _('registerForm');
            const formContainer = _('formContainer');
            displayForm.addEventListener('click', showForm)
            
            function _(e){
                return document.getElementById(e);
            }
            function showForm() {
                document.querySelector('.form_wrapper .card').classList.toggle('show')
            };

            forLogin.addEventListener('click', () =>{
                forLogin.classList.add('active');
                forRegister.classList.remove('active');
                if(forLogin.classList.contains('toggle_form')) {
                    formContainer.style.transform = 'translate(0%)';
                    formContainer.style.transition = 'transform .5s';
                    formRegister.classList.add('toggle_form');
                    formLogin.classList.remove('toggle_form');
            }
        });

            forRegister.addEventListener('click', () => {
                forLogin.classList.remove('active');
                forRegister.classList.add('active');
                if(forRegister.classList.contains('toggle_form')) {
                    formContainer.style.transform = 'translate(-100%)';
                    formContainer.style.transition = 'transform .5s';
                    formRegister.classList.remove('toggle_form');
                    formLogin.classList.add('toggle_form');
                }
            });

