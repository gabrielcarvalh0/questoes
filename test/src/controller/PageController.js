class PageController {
    constructor() {



        this.initialize();
    }



    initialize() {
        this.Opcoes1();
        this.Opcoes2();
        this.Opcoes3();
        this.Opcoes4();
    }

    Opcoes1() {

        let spanText = document.querySelectorAll(".form-check-label .a")
        const array = [];
        spanText.forEach(texto => {

            const res = texto.innerText

            array.push(res)

        });
        spanText.innerText = this.embaralha(array)
        spanText[0].innerText = array[0]
        spanText[1].innerText = array[1]
        spanText[2].innerText = array[2]
        spanText[3].innerText = array[3]


    }
    Opcoes2() {

        let spanText = document.querySelectorAll(".form-check-label .b")
        const array = [];
        spanText.forEach(texto => {

            const res = texto.innerText

            array.push(res)

        });
        spanText.innerText = this.embaralha(array)
        spanText[0].innerText = array[0]
        spanText[1].innerText = array[1]
        spanText[2].innerText = array[2]
        spanText[3].innerText = array[3]



    }
    Opcoes3() {

        let spanText = document.querySelectorAll(".form-check-label .c")
        const array = [];
        spanText.forEach(texto => {

            const res = texto.innerText

            array.push(res)

        });
        spanText.innerText = this.embaralha(array)
        spanText[0].innerText = array[0]
        spanText[1].innerText = array[1]
        spanText[2].innerText = array[2]
        spanText[3].innerText = array[3]



    }
    Opcoes4() {

        let spanText = document.querySelectorAll(".form-check-label .d")
        const array = [];
        spanText.forEach(texto => {

            const res = texto.innerText

            array.push(res)

        });
        spanText.innerText = this.embaralha(array)
        spanText[0].innerText = array[0]
        spanText[1].innerText = array[1]
        spanText[2].innerText = array[2]
        spanText[3].innerText = array[3]



    }



    embaralha(lista) {

        for (let indice = lista.length; indice; indice--) {

            const indiceAleatorio = Math.floor(Math.random() * indice);

            // atribuição via destructuring
            [lista[indice - 1], lista[indiceAleatorio]] =
                [lista[indiceAleatorio], lista[indice - 1]];
        }
    }



    setError() {
        console.log('erro no switch')
    }
    checkNumber(value) {

        switch (value) {
            case this._spanText.class.contains('a'):
                this.Opcoes1(value);
                break

            case this._spanText.class.contains('b'):

                this.Opcoes2(value);
                break
            case this._spanText.class.contains('c'):

                this.Opcoes3(value);
                break
            case this._spanText.class.contains('d'):

                this.Opcoes4(value);
                break

            default:
                this.setError();
        }
    }

}


