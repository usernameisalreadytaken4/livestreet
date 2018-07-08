{**
 * Настройки аккаунта (емэйл, пароль)
 *}

{component_define_params params=[ 'user' ]}

{hook run='settings_account_begin'}

<form method="post" enctype="multipart/form-data" class="js-form-validate">
    {* @hook Начало формы с настройками аккаунта *}
    {hook run='user_settings_account_begin'}

    <fieldset>
        <legend>{lang name='user.settings.account.account'}</legend>

        {* E-mail *}
        {component 'field' template='email'
                 value = $user->getMail()
                 note  = {lang name='user.settings.account.fields.email.note'}}
    </fieldset>


    <fieldset>
        <legend>{lang name='user.settings.account.password'}</legend>

        <p class="text-info">{lang name='user.settings.account.password_note'}</p>

        {* Текущий пароль *}
        {component 'field' template='text'
                 name    = 'password_now'
                 type    = 'password'
                 inputClasses = 'ls-width-200'
                 label   = {lang name='user.settings.account.fields.password.label'}}

        {* Новый пароль *}
        {component 'field' template='text'
                 name    = 'password'
                 rules   = [ 'length' => '[5,20]' ]
                 type    = 'password'
                 inputClasses = 'ls-width-200 js-user-settings-password'
                 label   = {lang name='user.settings.account.fields.password_new.label'}}

        {* Повторить новый пароль *}
        {component 'field' template='text'
                 name    = 'password_confirm'
                 rules   = [ 'length' => '[5,20]', 'equalto' => '.js-user-settings-password' ]
                 type    = 'password'
                 inputClasses = 'ls-width-200'
                 label   = {lang name='user.settings.account.fields.password_confirm.label'}}
    </fieldset>

    {* @hook Конец формы с настройками аккаунта *}
    {hook run='user_settings_account_end'}

    {* Скрытые поля *}
    {component 'field' template='hidden.security-key'}

    {* Кнопки *}
    {component 'button' mods='primary' text=$aLang.common.save}
</form>

{hook run='settings_account_end'}