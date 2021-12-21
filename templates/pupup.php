<div class="sign-in__wrapper modal__wrapper">
    <div class="sign-in modal">
        <span class="sign-in__close modal__close">&times;</span>
        <div class="sign-in__content">
            <div class="title">Sign in</div>
            <form class="sign-in__form" action="#" method="POST">
                <input class="sign-in__login" type="text" placeholder="login"
                       minlength="5" maxlength="15" pattern="[a-zA-Z]{5,15}" required>
                <input class="sign-in__password" type="password" placeholder="password"
                       minlength="5" maxlength="15" pattern="[a-zA-Z0-9_]{5,15}" required>
                <button class="sign-in-btn btn" type="submit">Sign In</button>
            </form>
        </div>
    </div>
</div>
<div class="sign-up__wrapper modal__wrapper">
    <div class="sign-up modal">
        <span class="sign-up__close modal__close">&times;</span>
        <div class="sign-up__content">
            <div class="title">Sign up</div>
            <form class="sign-up__form" action="#" method="POST">
                <input class="sign-up__login" type="text" placeholder="login" name="login"
                       minlength="5" maxlength="15" pattern="[a-zA-Z]{5,15}" required>
                <input class="sign-up__password" type="password" placeholder="password" name="password"
                       minlength="5" maxlength="15" pattern="[a-zA-Z0-9_]{5,15}" required>
                <input class="sign-up__repeat-password" type="password" placeholder="repeat password"
                       name="repeatPassword"
                       minlength="5" maxlength="15" pattern="[a-zA-Z]{5,15}" required>
                <input class="sign-up__email" type="email" placeholder="email" name="email"
                       minlength="4" maxlength="15" pattern="[a-zA-Z_.]{2,10}@[a-zA-Z_.]{2,10}.[a-zA-Z]{2,5}" required>
                <input class="sign-up__phone" type="tel" placeholder="phone" name="phone"
                       minlength="11" maxlength="11" pattern="[0-9]{11}">
                <div class="checkbox__wrapper">
                    <input class="sign-up-agree" type="checkbox" name="isAgreeWithPrivatePolicy" required>
                    <span>Agree with policy</span>
                </div>
                <button class="sign-up-btn btn" type="submit">Sign Up</button>
            </form>

        </div>
    </div>
</div>