<div class="login_register_wrap">
    <div class="container">
        <div class="row justify-content-center align-items-center login_page">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Verify Email</h3>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="otp" name="otp"
                                placeholder="OTP code">
                            <button onclick="verifyOTP()" type="submit" class="btn btn-fill-out btn-block mt-3"
                                name="login">Verify</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    async function verifyOTP() {
        let email = sessionStorage.getItem('email')
        console.log(email);
        let otp = document.getElementById('otp').value;
        if (otp.length !== 4) {
            errorToast('OTP field is required')
        } else {
            showLoader();
            let res = await axios.post('/verify-email', {
                email: email,
                otp: otp
            });
            console.log(res);
            hideLoader()
            if (res.data.status === 'success' && res.status === 200) {
                successToast(res.data.msg);
                setTimeout(() => {
                    window.location.href = '/'
                }, 1000);
            }
        }
    }
</script>
