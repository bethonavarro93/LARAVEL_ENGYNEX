const token = document.getElementById('widgetchat').getAttribute('src').split('?')[1].split('=')[1];

alert(token);

// create style for chat widget
const style = document.createElement('style');
style.innerHTML = `
.chatbox__support {
    background: #f9f9f9!important;
    height: 450px!important;
    width: 350px!important;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1)!important;
    border-top-left-radius: 20px!important;
    border-top-right-radius: 20px!important;
}

/* HEADER */
.chatbox__header {
    background: var(--primaryGradient)!important;
    display: flex!important;
    flex-direction: row!important;
    align-items: center!important;
    justify-content: center!important;
    padding: 15px 20px!important;
    border-top-left-radius: 20px!important;
    border-top-right-radius: 20px!important;
    box-shadow: var(--primaryBoxShadow)!important;
}

.chatbox__image--header {
    margin-right: 10px!important;
}

.chatbox__heading--header {
    font-size: 1.2rem!important;
    color: white!important;
}

.chatbox__description--header {
    font-size: .9rem!important;
    color: white!important;
}

/* Messages */
.chatbox__messages {
    padding: 0 20px!important;
}

.messages__item {
    margin-top: 10px!important;
    background: #E0E0E0!important;
    padding: 8px 12px!important;
    max-width: 70%!important;
}

.messages__item--visitor,
.messages__item--typing {
    border-top-left-radius: 20px!important;
    border-top-right-radius: 20px!important;
    border-bottom-right-radius: 20px!important;
}

.messages__item--operator {
    border-top-left-radius: 20px!important;
    border-top-right-radius: 20px!important;
    border-bottom-left-radius: 20px!important;
    background: var(--primary)!important;
    color: white!important;
}

/* FOOTER */
.chatbox__footer {
    display: flex!important;
    flex-direction: row!important;
    align-items: center!important;
    justify-content: space-between!important;
    padding: 20px 20px!important;
    background: var(--secondaryGradient)!important;
    box-shadow: var(--secondaryBoxShadow)!important;
    border-bottom-right-radius: 10px!important;
    border-bottom-left-radius: 10px!important;
    margin-top: 20px!important;
}

.chatbox__footer input {
    border: none!important;
    padding: 10px 10px!important;
    border-radius: 30px!important;
    text-align: center!important;
}

.chatbox__send--footer {
    color: white!important;
}

.chatbox__button button,
.chatbox__button button:focus,
.chatbox__button button:visited {
    padding: 10px!important;
    background: white!important;
    border: none!important;
    outline: none!important;
    border-top-left-radius: 50px!important;
    border-top-right-radius: 50px!important;
    border-bottom-left-radius: 50px!important;
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1)!important;
    cursor: pointer!important;
}

/* CHATBOX
=============== */
.chatbox {
    position: absolute!important;
    bottom: 30px!important;
    right: 30px!important;
}

/* CONTENT IS CLOSE */
.chatbox__support {
    display: flex!important;
    flex-direction: column!important;
    background: #eee!important;
    width: 300px!important;
    height: 350px!important;
    z-index: -123456!important;
    opacity: 0!important;
    transition: all .5s ease-in-out!important;
}

/* CONTENT ISOPEN */
.chatbox--active {
    transform: translateY(-40px)!important;
    z-index: 123456!important;
    opacity: 1!important;

}

/* BUTTON */
.chatbox__button {
    text-align: right!important;
}


/* HEADER */
.chatbox__header {
    position: sticky!important;
    top: 0!important;
    background: orange!important;
}

/* MESSAGES */
.chatbox__messages {
    margin-top: auto!important;
    display: flex!important;
    flex-direction: column!important;
    overflow-y: scroll!important;
    flex-direction: column-reverse!important;
}

.messages__item {
    background: orange!important;
    max-width: 60.6%!important;
    width: fit-content!important;
}

.messages__item--operator {
    margin-left: auto!important;
}

.messages__item--visitor {
    margin-right: auto!important;
}

/* FOOTER */
.chatbox__footer {
    position: sticky!important;
    bottom: 0!important;
}

.messages__item--typing {
    will-change: transform!important;
    width: auto!important;
    border-top-right-radius: 20px!important;
    border-top-left-radius: 20px!important;
    border-bottom-right-radius: 20px!important;
    padding: 15px 20px!important;
    display: table!important;
    margin-right: auto!important;
    position: relative!important;
    animation: 2s bulge infinite ease-out!important;
}

.messages__item--typing::before,
.messages__item--typing::after {
      content: ''!important;
      position: absolute!important;
      bottom: -2px!important;
      left: -2px!important;
      height: 10px!important;
      width: 10px!important;
      border-radius: 50%!important;
}
.messages__item--typing::after {
      height: 10px!important;
      width: 10px!important;
      left: -10px!important;
      bottom: -10px!important;
}
span.messages__dot {
    height: 8px!important;
    width: 8px!important;
    float: left!important;
    margin: 0 1px!important;
    background-color: #9E9EA1!important;
    display: block!important;
    border-radius: 50%!important;
    opacity: 0.4!important;
    animation: 1s blink infinite!important;
}

@keyframes blink {
    50% {
        opacity: 1!important;
    }
}

@keyframes bulge {
    50% {
        transform: scale(1.05)!important;
    }
}

`;

// add style to head
document.head.appendChild(style);


// create a interfaz for chat widget
const chatWidget = document.createElement('div');
chatWidget.id = 'chat-widget';
chatWidget.innerHTML = `
<div class="container">
<div class="chatbox">
    <div class="chatbox__support">
        <div class="chatbox__header">
            <div class="chatbox__image--header">
                <img src="./images/image.png" alt="image">
            </div>
            <div class="chatbox__content--header">
                <h4 class="chatbox__heading--header">Chat support</h4>
                <p class="chatbox__description--header">There are many variations of passages of Lorem Ipsum available</p>
            </div>
        </div>
        <div class="chatbox__messages">
            <div>
                <div class="messages__item messages__item--visitor">
                    Can you let me talk to the support?
                </div>
                <div class="messages__item messages__item--operator">
                    Sure!
                </div>
                <div class="messages__item messages__item--visitor">
                    Need your help, I need a developer in my site.
                </div>
                <div class="messages__item messages__item--operator">
                    Hi... What is it? I'm a front-end developer, yay!
                </div>
                <div class="messages__item messages__item--typing">
                    <span class="messages__dot"></span>
                    <span class="messages__dot"></span>
                    <span class="messages__dot"></span>
                </div>
            </div>
        </div>
        <div class="chatbox__footer">
            <img src="./images/icons/emojis.svg" alt="">
            <img src="./images/icons/microphone.svg" alt="">
            <input type="text" placeholder="Write a message...">
            <p class="chatbox__send--footer">Send</p>
            <img src="./images/icons/attachment.svg" alt="">
        </div>
    </div>
    <div class="chatbox__button">
        <button>button</button>
    </div>
</div>
</div>
`;

// add chat widget to body
document.body.appendChild(chatWidget);


class InteractiveChatbox {
    constructor(a, b, c) {
        this.args = {
            button: a,
            chatbox: b
        }
        this.icons = c;
        this.state = false;
    }

    display() {
        const {
            button,
            chatbox
        } = this.args;

        button.addEventListener('click', () => this.toggleState(chatbox))
    }

    toggleState(chatbox) {
        this.state = !this.state;
        this.showOrHideChatBox(chatbox, this.args.button);
    }

    showOrHideChatBox(chatbox, button) {
        if (this.state) {
            chatbox.classList.add('chatbox--active')
            this.toggleIcon(true, button);
        } else if (!this.state) {
            chatbox.classList.remove('chatbox--active')
            this.toggleIcon(false, button);
        }
    }

    toggleIcon(state, button) {
        const {
            isClicked,
            isNotClicked
        } = this.icons;
        let b = button.children[0].innerHTML;

        if (state) {
            button.children[0].innerHTML = isClicked;
        } else if (!state) {
            button.children[0].innerHTML = isNotClicked;
        }
    }
}


const chatButton = document.querySelector('.chatbox__button');
const chatContent = document.querySelector('.chatbox__support');
const icons = {
    isClicked: '<img src="./images/icons/chatbox-icon.svg" />',
    isNotClicked: '<img src="./images/icons/chatbox-icon.svg" />'
}
const chatbox = new InteractiveChatbox(chatButton, chatContent, icons);
chatbox.display();
chatbox.toggleIcon(false, chatButton);
