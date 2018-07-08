{**
 * Кнопка Вступить / Покинуть блог
 *
 * @param object $blog Блог
 *}

{component_define_params params=[ 'blog' ]}

{if $oUserCurrent && $oUserCurrent->getId() != $blog->getOwnerId() && $blog->getType() == 'open'}
    {component 'button'
        attributes = [ 'data-blog-id' => $blog->getId() ]
        classes    = 'js-blog-join'
        text       = ($blog->getUserIsJoin()) ? $aLang.blog.join.leave : $aLang.blog.join.join
        mods       = ($blog->getUserIsJoin()) ? false : 'primary'}
{/if}