
    <div class="settings_2">
        <div class="top_settings">Профиль
        </div>
        <div class="wrap_align">
            <div class="loading"></div>
            <div class="align">

                <label for="еmail"><span class="star">★</span>Email адрес</label>
                <input type="mail" id="emailInp" class="inputFields" placeholder="<?= $placeHolder['email']; ?>">
                <span id="emailError"  class="textError"></span>

            </div>
            <div class="align">
                <label for="password">Новый пароль</label>
                <input type="password" id="passwordInp" class="inputFields" >
                <span id="passwordError" class="textError"></span>
                <p class="qualification">Введите от шести символов</p>
            </div>
            <div class="align" style="margin-top: 37px;">
                <label for="password_ad">Подтвердить пароль</label>
                <input type="password" id="rePasswordInp" class="inputFields" >
                <span id="rePasswordError" class="textError" style="padding-bottom: 15px"></span>
            </div>
            <input type="button" class="save_2" value="Сохранить">
        </div>

        <div class="anketa">Анкетные данные
        </div>
        <div class="wrap_align">
            <div class="align">
                <label for="avatar">Аватар</label>
                <input type="url" id="avatar" class="inputFields">
                <input type="submit" id="avatarPhoto" class="inputFields" value="" >
            </div>
            <div class="align">
                <label for="idea"><span class="star">★</span>Статус</label>
                <input id="ideaInp" class="inputFields" placeholder="<?= $placeHolder['idea']; ?>">
                <span id="ideaError" class="textError"></span>

            </div>
            <div class="align">
                <label for="name"><span class="star">★</span>Имя</label>
                <input type="text" id="nameInp" class="inputFields" placeholder="<?= $placeHolder['name']; ?>">
                <span id="nameError" class="textError"></span>
            </div>
            <div class="align">
                <label for="soname"><span class="star">★</span>Фамилия</label>
                <input type="text" id="surnameInp" class="inputFields" placeholder="<?= $placeHolder['surname']; ?>">
                <span id="surnameError" class="textError"></span>
            </div>
            <div class="align">
                <label for="age"><span class="star">★</span>Возраст</label>
                <input type="text" id="birth_dateInp" class="inputFields" placeholder="<?= $placeHolder['birth_date']; ?>">
                <span id="birth_dateError" class="textError"></span>
            </div>
            <div class="align">
                <label for="gender"><span class="star">★</span>Пол</label>
                <select id="genderInp" class="dropDownList">
                    <option>мужской</option>
                    <option>женский</option>
                </select>
            </div>
            <div class="align">
                <label for="city"><span class="star">★</span>Город</label>
                <select  id="cityInp" class="dropDownList">
                    <option>Запорожье</option>
                    <option>Львов</option>
                    <option>Винница</option>
                </select>
            </div>
            <input type="button" class="save_2" value="Сохранить">
        </div>

        <div class="anketa">Дополнительная информация
        </div>
        <div class="conteuner_align"><br>
            <div class="blockTypeOfRecording">
                <p style="font-weight: bold;"><span class="star">★</span>Тип съемки</p>
                <div id="typeOfShooting">
                </div>
                <div class="filter">
                    <p><input type="checkbox">Детская фотосъемка</p>
                    <p><input type="checkbox">Выездня фотосъемка</p>
                </div>
                <div class="filter">
                    <p><input type="checkbox">Фото на документы</p>
                    <p><input type="checkbox">Деловой портрет</p>
                </div>
                <div class="filter">
                    <p><input type="checkbox">Свадебная фотосъемка</p>
                    <p><input type="checkbox">Семейная фотосъемка</p>
                </div>
                <div class="filter">
                    <p><input type="checkbox">Рекламная фотосъемка</p>
                    <p><input type="checkbox">Проффесиональное портфолио</p>
                </div><br>
            </div>

            <div class="margin_p">
                <p>Слоган</p>
                <input type="text" class="inputFields" id="phraseInp" placeholder="<?= $placeHolder['phrase']; ?>">
                <span id="phraseError"></span>
            </div>
            <div class="margin_p">
                <p>Достижения</p>
                <input type="text" class="inputFields" id="achievementsInp" placeholder="<?= $placeHolder['achievements']; ?>">
                <span id="achievementsError"></span>
            </div>
            <div class="margin_p">
                <p>Интересы</p>
                <input type="text" class="inputFields" id="interestsInp" placeholder="<?= $placeHolder['interests']; ?>">
                <span id="interestsError"></span>
            </div>
            <div class="margin_p">
                <p>О Себе</p>
                <input type="text" class="inputFields" id="aboutInp" placeholder="<?= $placeHolder['about']; ?>">
                <span id="aboutError"></span>
            </div>
            <!--<div class="align_save">-->
                <input type="button" class="save_2" value="Сохранить">
            <!--</div>-->
        </div>

        <div class="anketa">Дополнительная информация
        </div>
        <div class="wrap_align">
            <div class="align">

                <label for="phone_number" ><span class="star">★</span>Номер телефона</label>
                <input type="tel" id="phone_numberInp" class="inputFields" placeholder="<?= $placeHolder['phone_number']; ?>">
                <span id="phone_numberError"></span>
                <p id="addAnotherNumber" class="qualification">Добавить еще один номер</p>
            </div>
            <div class="align" style="margin-top: 30px;">
                <label for="skype" id="labelSkype">Skype</label>
                <input type="text" id="skypeInp" class="inputFields" placeholder="<?= $placeHolder['skype']; ?>">
                <span id="skypeError"></span>
            </div>
            <div class="align">
                <label for="site">ICQ</label>
                <input type="url" id="icqInp" class="inputFields" placeholder="<?= $placeHolder['icq']; ?>">
                <span id="icqError"></span>
            </div>
            <div class="align">
                <label for="vkontakte">Вконтакте</label>
                <input type="url" id="vkInp" class="inputFields" placeholder="<?= $placeHolder['vk']; ?>" >
                <span id="vkError"></span>
            </div>
            <div class="align">
                <label for="fb">Facebook</label>
                <input type="url" id="facebookInp" class="inputFields" placeholder="<?= $placeHolder['facebook']; ?>" >
                <span id="facebookError"></span>
            </div>
            <input type="button" class="save_2" value="Сохранить">
        </div>

    </div>





