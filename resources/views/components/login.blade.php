<div class="login_register_wrap">
    <div class="container">
        <div class="row justify-content-center align-items-center login_page">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Login</h3>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Your Email">
                            <button onclick="login()" type="submit" class="btn btn-fill-out btn-block mt-3"
                                name="login">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    async function login() {
        let email = document.getElementById('email').value;
        if (email.length === 0) {
            errorToast('Email field is required')
        } else {
            showLoader();
            let res = await axios.post('/login', {
                email: email
            });
            console.log(res);
            hideLoader()
            if (res.data.status === 'success' && res.status === 200) {
                successToast(res.data.msg);
                sessionStorage.setItem('email', email)
                setTimeout(() => {
                    window.location.href = '/verify-email'
                }, 1000);
            }
        }
    }
</script>
