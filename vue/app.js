class Autogrow extends HTMLTextAreaElement {
    constructor() {
        super()
        this.onFocus = this.onFocus.bind(this)
        this.autogrow = this.autogrow.bind(this)
        this.onResize = this.onResize.bind(this)
    }

    connectedCallback() {
        this.addEventListener('focus', this.onFocus)
        this.addEventListener('input', this.autogrow)
    }

    disconnectedCallback() {
        window.removeEventListener('resize', this.onResize)

    }

    onFocus() {
        this.autogrow()
        window.addEventListener('resize', this.onResize)
        this.removeEventListener('focus', this.onFocus)
    }

    onResize() {
        this.autogrow()

    }

    autogrow() {
        this.style.height = "auto"
        this.style.overflow = "hidden"
        this.style.height = this.scrollHeight + 'px'

    }
}

customElements.define('textarea-autogrow',
    Autogrow, {extends: 'textarea'});
