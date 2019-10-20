<div id="modal-overlay" class="modal fade p-0" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal content-->
            <div class="modal-content program-details row pl-3 pr-3">
                <div class="pt-0">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="col-12 sec-title">
                    <h2>Sign In</h2>
                    <div class="separator"></div>
                </div>
                <div class="modal-body text-center">
                    <!-- <div>
                        <a href="#" class="fb-btn">
                            </i>Sign In With Facebook
                        </a>
                    </div>
                    <div class="mt-3 mb-5">
                        <a href="#" class="google-btn">
                            Sign In With Google
                        </a>
                    </div>
                    <hr data-title="OR">
                    </hr> -->
                    <form id="user-sign-in">
                        <div class="mt-2">
                            <input type="email" name="u_email" placeholder="Email">
                        </div>
                        <div class="mt-3">
                            <input type="password" name="u_password" placeholder="Password">
                        </div>
                        <input type="hidden" name="action" value="signin">
                        <button type="submit" class="submit-btn mt-3 mb-3">Sign In</button>

                        <p class="mb-0"><a href="javascript:;" data-toggle="modal" data-target="#forgot-password" data-backdrop="static" data-keyboard="false" data-dismiss="modal">forgot password?</a></p>
                        <p class="mb-0">Don't have an account yet? <a href="#" data-toggle="modal" data-target="#create-account" data-backdrop="static" data-keyboard="false" data-dismiss="modal">Sign up</a></p>
                    </form>
                </div>

            </div>
        </div>
    </div>