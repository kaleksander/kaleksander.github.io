<!doctype html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" />
    <link href="style_results.css" rel="stylesheet" />
    <link href="autocompleter.css" rel="stylesheet" />
    <link rel="shortcut icon" href="tytul.svg" />

    <script type="text/javascript" src="vue.js"></script>
    <script src="autocompleter_php.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <title>Google</title>

</head>

<body class="home">
    
    <div id="app">

        <header>

            <div class="h-flex-container">

                <section class="h-flex_element linki">
                    <a class="aplikacje">Gmail</a>
                    <a class="aplikacje">Grafika</a>
                </section>

                <div class="gorny_pasek">
                <section class="m-flex-element ">
                    <v-autocompleter :value="googleSearch"
                    @input="googleSearch = $event" id="cityNTop" ref="top" :options="results" @enter='showResults'></v-autocompleter>
                </section>
                </div>

                <section class="h-flex_element aplikacja">
                    <a class="aplikacja"><img class="aplikacja" src="Grafiki/aplikacje.svg"/></a>
                    <a class="przycisk-login">Zaloguj się</a>
                </section>

            </div>

            <div class="nawigacja">
                <section class="odnosnik wszystko">Wszystko</section>
                <section class="odnosnik">Grafika</section>
                <section class="odnosnik">Mapy</section>
                <section class="odnosnik">Wiadomości</section>
                <section class="odnosnik">Wideo</section>
                <section class="odnosnik">Więcej</section>
                <section class="odnosnik">Ustawienia</section>
                <section class="odnosnik">Narzędzia</section>
            </div>

        </header>

        <main>

            <div class="m-flex-container">
                <div class="liczba_wynikow">Około 151 000 000 wyników (0,51 s)</div>
                <section class="m-flex-element"><a id="ggl-main-link"><img class="googleLogo" src="Grafiki/logo_google.png"/></a></section>
                <form class="szukanie">

                    <section class="m-flex-element  glowna" >
                            <v-autocompleter :value="googleSearch"
                            @input="inputFunc($event)" id="cityNTop" v-bind:options="results" ref="bottom" @enter='showResults'></v-autocompleter>
                    </section>
                    
                </form>
                <div class="m-flex-element greyButtons" :class="{hidden : /*googleSearch.length > 0 && focused && filteredCities.length>0*/0}">
                    <input class="grey-button sub" type="submit" value="Szukaj w Google" />
                    <input class="grey-button" type="submit" value="Szczęśliwy traf" />
                </div>
            </div>
            <div class="lista">
                <div class="wyszukiwanie">
                    <div class="result">
                        <a class="link" href="#">https://developer.mozilla.org › docs › What_is_JavaScript</a><button>▼</button>
                        <h2><a>Co to jest JavaScript? - Naucz się pisać strony internetowe ...</a></h2>
                        <p>Podstawowa znajomość komputera, podstawowa znajomość HTML i CSS. Cel: Zapoznanie z istotą JavaScript, co on robi i jak jest ...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://developer.mozilla.org › Learn › JavaScript_basics</a><button>▼</button>
                        <h2><a>Podstawy JavaScript - Naucz się pisać strony internetowe ...</a></h2>
                        <p>js : var myHeading = document.querySelector('h1'); myHeading.textContent = 'Hello world!'; Na koniec upewnij się, że pliki HTML i JavaScript ...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://pl.wikipedia.org › wiki › JavaScript </a><button>▼</button>
                        <h2><a>JavaScript – Wikipedia, wolna encyklopedia</a></h2> 
                        <p>JavaScript, w skrócie JS – skryptowy język programowania, stworzony przez firmę Netscape, najczęściej stosowany na stronach internetowych. Twórcą ...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://www.w3schools.com › DEF...</a><button>▼</button>
                        <h2><a>JavaScript Tutorial - W3Schools</a></h2> 
                        <p>... and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java and XML.</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://vavatech.pl › technologie › jezyki-programowania </a><button>▼</button>
                        <h2><a>Język programowania – JavaScript - Vavatech.pl - Strefa wiedzy</a></h2>
                        <p>JavaScript jest to skryptowy język programowania wysokiego poziomu. Razem z HTML i CSS JavaScript stanowi podstawowe narzędzie do tworzenia stron ...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://kodilla.com › kurs-javascript</a><button>▼</button>
                        <h2><a>Kurs JavaScript - online, od podstaw, programowania, nauka ...</a></h2>
                        <p><span>Kurs JavaScript w Kodilli jest elementem realizowanych przez internet bootcampów Web Developer Plus oraz Front-end: React. W tym pierwszym, trwającym 9 ...</p>
                      </div>
              
                      <div class="result">
                        <a class="link" href="#">https://www.hackreactor.com › blog</a> <button>▼</button>
                        <h2><a>What is JavaScript Used For? | Hack Reactor</a></h2>
                        <p>What is JavaScript? JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web ...</p>
                    </div>
              
                    <div class="result">
                        <a class="link" href="#">https://www.tutorialspoint.com › jav... </a> <button>▼</button>
                        <h2><a>Javascript Tutorial - Tutorialspoint</a></h2>
                        <p>JavaScript is a lightweight, interpreted programming language. It is designed for creating network-centric applications. It is complimentary to and integrated with ...
                        </p>
                    </div>
              
                    <div class="result">
                        <a class="link" href="#">https://www.enable-javascript.com</a> <button>▼</button>
                        <h2><a>How to enable JavaScript in your browser and why</a></h2>
                        <p>Instructions on how to enable (activate) JavaScript in web browser and why.</p>
                    </div>
              
                    <div class="result">
                        <a class="link" href="#">https://reactjs.org</a> <button>▼</button>
                        <h2><a>React – A JavaScript library for building user interfaces</a></h2>
                        <p>Since component logic is written in JavaScript instead of templates, you can easily pass rich data through your app and keep state out of the DOM. Learn Once, ...
                        </p>
                    </div>
                </div>
                
                <br>

                <div class="help">
        
                  <h3>Podobne wyszukiwania</h3>
                    <div class="helplists">
                        <ul class="helpleft">
                            <a id="helpbar1" type="text"><img src="Grafiki/lupa1.webp" class="lupka" alt="Lupa Google" href="#">JavaScript download</a>
                            <a id="helpbar2" type="text"><img src="Grafiki/lupa1.webp" class="lupka" alt="Lupa Google" href="#">JavaScript program</a>
                            <a id="helpbar3" type="text"><img src="Grafiki/lupa1.webp" class="lupka" alt="Lupa Google" href="#">JavaScript kurs</a>
                            <a id="helpbar4" type="text"><img src="Grafiki/lupa1.webp" class="lupka" alt="Lupa Google" href="#">JavaScript pomoc</a>
                        </ul>
                        <ul class="helpright">
                            <a id="helpbar5" type="text"><img src="Grafiki/lupa1.webp" class="lupka" alt="Lupa Google" href="#">JavaScript podstawy</a>
                            <a id="helpbar6" type="text"><img src="Grafiki/lupa1.webp" class="lupka" alt="Lupa Google" href="#">JavaScript basics</a>
                            <a id="helpbar7" type="text"><img src="Grafiki/lupa1.webp" class="lupka" alt="Lupa Google" href="#">JavaScript tutorial</a>
                            <a id="helpbar8" type="text"><img src="Grafiki/lupa1.webp" class="lupka" alt="Lupa Google" href="#">JavaScript help</a>
                        </ul>
                    </div>
        
                </div>

                    <br><br>

                    <table class="googlelist">
                      <tr>
                        <td><span class="blue">G</span></td>
                        <td><span class="red">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="yellow">o</span></td>
                        <td><span class="blue">g</span></td>
                        <td><span class="green">l</span></td>
                        <td><span class="red">e</span></td>
                        <td rowspan="2" style="width: 10px;"></td>
                        <td><span class="blue arrow">></span></td>
                      </tr>
          
                      <tr>
                        <td class="numer"></td>
                        <td class="numer">1</td>
                        <td class="numer">2</td>
                        <td class="numer">3</td>
                        <td class="numer">4</td>
                        <td class="numer">5</td>
                        <td class="numer">6</td>
                        <td class="numer">7</td>
                        <td class="numer">8</td>
                        <td class="numer">9</td>
                        <td class="numer">10</td>
                        <td colspan="3"></td>
                        <td class="numer">Następna</td>
                      </tr>
          
                    </table>

        </main>
        <footer class="dol">
            <div class="dolny_pasek">
                <div class="panstwo">Polska<span class="lokacja"><span class="kropka"></span><b> 12-234, Miasto</b> - Z Twojego adresu internetowego - <a>Użyj dokładnej lokalizacji</a> - <a>Dowiedz się więcej</a></span></div>
            </div>
            <div class=" footer-container">
                <section class="f-flex-element sekcja pierwsza">
                    <a class="sekcja-item link odstep">O nas</a>
                    <a class="sekcja-item link odstep">Reklamuj się</a>
                    <a class="sekcja-item link odstep">Dla firm</a>
                    <a class="sekcja-item link odstep">Jak działa wyszukiwania</a>
                </section>
                <section class="f-flex-element sekcja druga">
                    <a class="sekcja-item link">Pomoc</a>
                    <a class="sekcja-item link">Prześlij opinię</a>
                    <a class="sekcja-item link">Prywatność</a>
                    <a class="sekcja-item link">Warunki</a>
                </section>
            </div>
        </footer>
        
    </div>
    <script>
        var app = new Vue({
                el: '#app',
                data:{
                    cities: window.cities,
                    googleSearch:"",
                    results:[]
                },
                updated() {
                    app.$nextTick(() => {

                            if (app.$refs.bottom.change) {
                                app.$refs.top.$refs.placeToFocus.focus();

                            } else {

                                app.$refs.bottom.$refs.placeToFocus.focus()

                            }
                        }
                    )},
                methods:{
                    showResults: function(){
                        if (app.$refs.bottom.change) {
                            this.googleSearch=app.$refs.top.enter()

                            } else {

                                this.googleSearch=app.$refs.bottom.enter()

                            }
                               
                        app.$refs.top.change=true
                        return this.change
                    },
                    findResultsDebounced : Cowboy.debounce(100, function findResultsDebounced() {
                console.log('Fetch: ', this.googleSearch);
				console.log(`http://localhost:8080/search?name=${this.googleSearch}`);
                fetch(`http://localhost:8080/search?name=${this.googleSearch}`)
                    .then(res => res.json())
                    .then(data => {
                        console.log('Data: ', data);
                        this.results = data;
                        app.$refs.bottom.$forceUpdate();
                    });
            }),
        inputFunc:function(ev){
            this.googleSearch=ev;
            this.findResultsDebounced();
        }
                }
                });
            
    </script>
</body>

</html>
