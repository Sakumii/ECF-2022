
const displayForm = _('displayForm');
            const forLogin = _('forLogin');
            const formLogin = _('loginForm');
            const forRegister = _('forRegister');
            const formRegister = _('registerForm');
            const formContainer = _('formContainer');
            const mainContainer = _('mainContainer');
            
            displayForm.addEventListener('click', showForm);
            displayForm.addEventListener('click', hideMain);
            
            function _(e){
                return document.getElementById(e);
            }
            function hideMain() {
                mainContainer.classList.toggle('hide')
            };
            function showForm() {
                document.querySelector('.form_wrapper .card').classList.toggle('show')
            };
            forRegister.addEventListener('click', () => {
                forLogin.classList.remove('active');
                forRegister.classList.add('active');
                if(formRegister.classList.contains('toggle_form')) {
                    formContainer.style.transform = 'translate(-100%)';
                    formContainer.style.transition = 'transform .5s';
                    formRegister.classList.remove('toggle_form');
                    formLogin.classList.add('toggle_form');
                }
            });
                forLogin.addEventListener('click', () =>{
                forLogin.classList.add('active');
                forRegister.classList.remove('active');
                if(formLogin.classList.contains('toggle_form')) {
                    formContainer.style.transform = 'translate(0%)';
                    formContainer.style.transition = 'transform .5s';
                    formRegister.classList.add('toggle_form');
                    formLogin.classList.remove('toggle_form');
            }
        });
                