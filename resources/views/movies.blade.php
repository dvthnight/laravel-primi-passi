@php
    class Movie{
        public $titolo;
        public $attori;
        public $lingua_originale;
        public $regista;
        public $anno;

        function __construct($_titolo,$_attori,$_lingua_originale, $_regista, $_anno){
            $this->titolo = $_titolo;
            $this->attori = $_attori;
            $this->lingua_originale = $_lingua_originale;
            $this->regista = $_regista;
            $this-> setAnno($_anno);
        }


        public function setAnno($_anno){
            if(is_numeric($_anno)){
                $this->anno = $_anno;
            } else {
                $this->anno = "dato non corretto";
            };
        }
    }

    $red_2 = new Movie("Red 2", ["Bruce Willis","John Malkovich","Catherine Zeta Jones"],"inglese","Dean Parisot","2013");
    // var_dump($red_2);

    $top_gun = new Movie("Top Gun",["Tom Cruise","Kelly McGillis","Anthony Edwards"],"inglese","Tony Scott","1986");
    // var_dump($top_gun);

    $creed = new Movie("Creed",["Michael B. Jordan","Sylvester Stallone","Sylvester Stallone"],"inglese","Ryan Coogler","2015");
    // var_dump($creed);

    $simpson = new Movie("I Simpson - Il film",["Homer","Marge","Bart","Lisa","Maggie"],"inglese","David Silverman","2007");
    // var_dump($simpson);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('movies')}}">Movies</a>
            </li>
        </ul>
    </nav>
    <h1>Lista film</h1>
        <ul>
            <li>
                <ul>
                    <li>
                        <h3>Titolo</h3>
                         {{$red_2->titolo}}
                    </li>
                    <li>
                        <h3>Attori</h3>
                        <ul>
                            @foreach($red_2->attori as $attore)
                                <li>
                                    <?php echo $attore; ?>
                                </li>
                             
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <h3>Lingua originale</h3>
                        {{$red_2->lingua_originale}}
                    </li>
                    <li>
                        <h3>Regista</h3>
                        {{$red_2->regista}}
                    </li>
                    <li>
                        <h3>Anno</h3>
                         {{$red_2->anno}}
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <h3>Titolo</h3>
                        {{$top_gun->titolo}}
                    </li>
                    <li>
                        <h3>Attori</h3>
                        <ul>
                            @foreach($top_gun->attori as $attore)
                                
                                <li>
                                    {{$attore}}
                                </li>
                            
                            @endforeach
                        </ul>
                    <li>
                        <h3>Lingua originale</h3>
                        {{$top_gun->lingua_originale}}
                    </li>
                    <li>
                        <h3>Regista</h3>
                        {{$top_gun->regista}}
                    </li>
                    <li>
                        <h3>Anno</h3>
                        {{$top_gun->anno}}
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <h3>Titolo</h3>
                        {{$creed->titolo }}
                    </li>
                    <li>
                        <h3>Attori</h3>
                        <ul>
                            @foreach($creed->attori as $attore)
                                
                                <li>
                                   {{$attore }}
                                </li>
                             
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <h3>Lingua originale</h3>
                        {{$creed->lingua_originale }}
                    </li>
                    <li>
                        <h3>Regista</h3>
                        {{$creed->regista}}
                    </li>
                    <li>
                        <h3>Anno</h3>
                        {{$creed->anno}}
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <h3>Titolo</h3>
                       {{$simpson->titolo}}
                    </li>
                    <li>
                        <h3>Attori</h3>
                        <ul>
                            @foreach($simpson->attori as $attore)
                            
                            <li>
                                {{$attore}}
                            </li>
                            
                            @endforeach 
                        </ul>
                    </li>
                    <li>
                        <h3>Lingua originale</h3>
                        {{$simpson->lingua_originale }}
                    </li>
                    <li>
                        <h3>Regista</h3>
                        {{$simpson->regista}} 
                    </li>
                    <li>
                        <h3>Anno</h3>
                        {{$simpson->anno }}
                    </li>
                </ul>
            </li>
        </ul>
</body>
</html>