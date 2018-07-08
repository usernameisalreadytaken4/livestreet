/**
 * Follow user
 *
 * @module ls/user/follow
 *
 * @license   GNU General Public License, version 2
 * @copyright 2013 OOO "ЛС-СОФТ" {@link http://livestreetcms.com}
 * @author    Denis Shakhov <denis.shakhov@gmail.com>
 */

(function($) {
    "use strict";

    $.widget( "livestreet.lsUserFollow", $.livestreet.lsComponent, {
        /**
         * Дефолтные опции
         */
        options: {
            // Ссылки
            urls: {
                // Подписаться
                follow: null,

                // Отписаться
                unfollow: null
            },
            selectors: {
                item: '> a'
            },
            classes: {
                active: 'active'
            },
            params: {},
            i18n: {
                follow: '@user.actions.follow',
                unfollow: '@user.actions.unfollow'
            }
        },

        /**
         * Конструктор
         *
         * @constructor
         * @private
         */
        _create: function () {
            this._super();
            this._on({ click: 'onClick' });

            if ( ! this.elements.item.length) {
                this.elements.item = this.element;
            }
        },

        /**
         * Коллбэк вызываемый при клике на кнопку подписки
         */
        onClick: function( event ) {
            this[ this._hasClass( 'active' ) ? 'unfollow' : 'follow' ]();
            event.preventDefault();
        },

        /**
         * Подписаться
         */
        follow: function() {
            this._load( 'follow', { users: [ this.element.data('id') ] }, 'onFollow' );
        },

        /**
         * Коллбэк вызываемый при подписке
         */
        onFollow: function( response ) {
            this.elements.item.text( this._i18n('unfollow') );
            this._addClass( 'active' );
        },

        /**
         * Отписаться
         */
        unfollow: function() {
            this._load( 'unfollow', { user_id: this.element.data('id') }, 'onUnfollow' );
        },

        /**
         * Коллбэк вызываемый при отписке
         */
        onUnfollow: function( response ) {
            this.elements.item.text( this._i18n('follow') );
            this._removeClass( 'active' );
        }
    });
})(jQuery);
