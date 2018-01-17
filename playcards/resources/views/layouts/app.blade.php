<!DOCTYPE html>
<html>
<head>
    <title>Playcards</title>
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="/js/app.js"></script>


</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')  

        <div id="deck"></div>
<input type="button" value="shuffle" onclick="load()" class="btn btn-primary btn-block">
<div id="endofChallenge"></div>

      </div>
    </div>        
</div>

</body>
</html>
<script type="text/javascript">
    var cards = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
var suits = ["diamonds", "hearts", "spades", "clubs"];
var deck = new Array();



function getDeck()
{
    var deck = new Array();

    for(var i = 0; i < suits.length; i++)
    {
        for(var x = 0; x < cards.length; x++)
        {
            var card = {Value: cards[x], Suit: suits[i]};
            deck.push(card);
        }
    }

    return deck;
}

function deal()
{
    // remove top card from deck
    var card = deck[deck.length-1];
    deck.splice(deck.length-1, 1);
    return card;
}

function shuffle()
{
    // for 1000 turns
    // switch the values of two random cards
    for (var i = 0; i < 1000; i++)
    {
        var location1 = Math.floor((Math.random() * deck.length));
        var location2 = Math.floor((Math.random() * deck.length));
        var tmp = deck[location1];

        deck[location1] = deck[location2];
        deck[location2] = tmp;
    }
}

function renderDeck()
{
    for(var i = 0; i < deck.length; i++)
    {
        var card = document.createElement("div");
        var value = document.createElement("div");
        var suit = document.createElement("div");
        card.className = "card";
        value.className = "value";
        suit.className = "suit " + deck[i].Suit;

        value.innerHTML = deck[i].Value;
        card.appendChild(value);
        card.appendChild(suit);

        document.getElementById("deck").appendChild(card);
    }
}

function load()
{
    deck = getDeck();
    shuffle();
    renderDeck();
}


window.onload = load;

</script>