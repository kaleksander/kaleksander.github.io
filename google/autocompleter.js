Vue.component("v-autocompleter", {
    template: `<div>\
    <div class='pasek'>\
    <div class='czesc'>\
        <img class='inputIcon widocznosc' src='Grafiki/lupa.svg'/>\
        <input class='inputSearch' maxlength='2048'\
        ref="placeToFocus"\
        :value="value"\
        @input="$emit('input', $event.target.value)"\
         @focus='focused = true'  @keyup.down='dol()' @keyup.up='gora()'\
         @keyup.enter="$emit('enter')"/> \
        <div class='iks'>\
        <img title='Wyczyść' class='inputIcon-clear' src='Grafiki/iks.svg' aria-label='Wyczyść'\
            role='button' />\
        <span class='linia'></span>\
        </div>\
        <img title='Narzędzia do wprowadzania tekstu' class='inputIcon-keyboard'\
                                src='Grafiki/klawiatura.svg'/>\
        <button id='SearchButton'><img class='inputIcon'\
                                src='Grafiki/przycisk.svg' /></button>\
        </div>\
        <div class='miastaNazwy' :class='{widocznosc : value.length > 0 && focused && filteredCities.length>0}' >\
        <ul >\
            <li  v-for='(miasto,index) in filteredCities' >\
                <div class='listaElementow' :class='{liFocused:index == inFocus}'>\
                    <img class='inputIcon' src='Grafiki/lupa.svg' />\
                        <a href='#' v-html='wytluszcz(miasto)' v-on:click="wybrane(index); $emit('enter')" >\
                            <b>{{ miasto }}</b></a>\
                </div>\
            </li>\
        </ul>\
        </div>\
        </div>\
        </div>`,
    model: {
        event: 'enter'
    },
    props: {
        options:{
            type: Array
        },
          value: {
            type: String,
            default: ""
          }
        },
    data() {
        return {
           // value: '',
            filteredCities: "",
            update_filteredCities: true,
            focused: false,
            change: false,
            inFocus: -1,
            searchedInput: '',
        }
    },
    computed:{
        aktywne() {
            if (this.value.length == 0) {
                this.change = false;
            }
            return this.change;

        }
     },
    watch: {
        // whenever question changes, this function will run
        inFocus: function () {
            this.update_filteredCities = false;
            this.value = this.filteredCities[this.inFocus].name;

        },
        value: function () {
            this.filtrowane_miasta_utworz(this.update_filteredCities);
            this.update_filteredCities = true;
            if (this.inFocus == -1) {
                this.searchedInput = this.value;

            }
            this.results();
        }
    },
    methods: {
        wytluszcz(miasto) {
            let re = new RegExp(this.searchedInput, "gi");
            let bolden = "<b>" + miasto.name.replace(re, match => {
                return "<span class='normal'>" + match + "</span>";
            }) + "</b>";

            return bolden;
        },
        enter() {
            this.update_filteredCities = true;
            this.change = true;
            this.inFocus = -1;
            this.focused = false;
            this.results();
            return this.value
        },
        wybrane(i) {
            this.value = this.filteredCities[i].name;
        },
        
        dol() {
            if (this.inFocus < this.filteredCities.length - 1) {
                this.inFocus += 1;
            }
            else if (this.inFocus == this.filteredCities.length - 1) {
                this.inFocus = 0;
            }
        },
        gora() {
            if (this.inFocus > 0) {
                this.inFocus -= 1;
            }
            else if (this.inFocus == 0) {
                this.inFocus = this.filteredCities.length - 1;
            }
        },
        filtrowane_miasta_utworz(yes) {
            if (yes) {
                let result = this.options.filter(miasto => miasto.name.includes(this.value));
                if (result.length > 10) {
                    this.filteredCities = result.slice(1, 11);
                }
                else {
                    this.filteredCities = result;
                }
                this.inFocus = -1;
            }
        },
        results() {
           
            if (this.aktywne) {
                document.getElementById("app").classList.add('results');

            }
            else if(  document.getElementById("app").classList.contains('results')){
                document.getElementById("app").classList.remove('results');

            }

        }

    }
})