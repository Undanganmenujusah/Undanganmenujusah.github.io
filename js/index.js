
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-app.js";
import { getDatabase, ref, set, push, child, onValue } from "https://www.gstatic.com/firebasejs/9.6.7/firebase-database.js";

const firebaseConfig = {
    apiKey: "AIzaSyD3ES5ijw0j-bRtXQcqsGlUiGh6I1o-mFA",
    authDomain: "weddingwebsite-6fa78.firebaseapp.com",
    databaseURL:"https://weddingwebsite-6fa78-default-rtdb.asia-southeast1.firebasedatabase.app/",
    projectId: "weddingwebsite-6fa78",
    storageBucket: "weddingwebsite-6fa78.appspot.com",
    messagingSenderId: "882066552640",
    appId: "1:882066552640:web:78d598eda2c333748baca5",
    measurementId: "G-4W52D8Q10G"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

const db = getDatabase();
const commentRef = ref(db, 'comments');

// Get comment
onValue(commentRef, (snapshot) => {
    resetList();
    if(snapshot.exists()){
        snapshot.forEach(element => {
            var data = element.val();
            var timestamp = $.format.prettyDate(data.timestamp) ;
            document.querySelector('.comment-list').innerHTML += `
                <div class="comment">
                    <div class="d-flex align-items-baseline mb-2">
                        <h4 class="name d-block my-0 me-3">${data.name}</h4>
                        <p class="timestamp d-block my-0 ">${timestamp}</p>
                    </div>
                    <p class="content-text">●&nbsp;&nbsp;&nbsp;&nbsp;${data.ucapan}</p>
                </div>
            `;
        });
    }else {
        document.querySelector('.comment-list').innerHTML = `
        <div class="comment">
            <div class="d-flex align-items-baseline mb-2">
                <h4 class="name d-block my-0 me-3">Belum Ada ucapan</h4>
            </div>
        </div>
    `
    }
});

// Detect action from form and get input value
document.getElementById("comment-form").addEventListener("submit",(e)=> {
    
    e.preventDefault();

    const name = document.getElementById("input-nama").value;
    const ucapan = document.getElementById("input-ucapan").value;

    var obj = {
        name : name,
        ucapan : ucapan,
        date : new Date().toString()
    } 

    postComment(obj);

    document.getElementById("comment-form").reset();
})

function postComment(data) {
    
    const key = push(child(ref(db),'comments')).key;

    set(ref(db, 'comments/' + key), {
        name : data.name,
        ucapan : data.ucapan,
        timestamp : data.date
    });
    
}

function resetList(){
    document.querySelector('.comment-list').innerHTML = ``;
}

// Copy Bank to clipboard
$('.copy-no-1').on("click", function(){
    var value = $("#no-rek-text-1").text();
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(value).select();
    document.execCommand("copy");
    $temp.remove();
})
$('.copy-no-2').on("click", function(){
    var value = $("#no-rek-text-2").text();
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(value).select();
    document.execCommand("copy");
    $temp.remove();
})

// Copy address to clipboard
$('.copy-address').on("click", function(){
    var value = $("#address-text").text();
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(value).select();
    document.execCommand("copy");
    $temp.remove();
})

// disable scrolling
$('html, body').css({
    overflow: 'hidden',
});


$('.invitation-btn').on("click", function(){
    document.getElementById("overlay").style.display = "none";
    document.getElementById("au").play();

    $('html, body').css({
        overflow: 'auto',
    });

    $('#au').trigger('play');

    window.scrollTo(0,0);
})

var audio = true;


$('#button-control').on("click",function(){
    
    controlAudioIcon();
    audio = !audio;
    controlAudioSound();
})

function controlAudioIcon() {
    if(audio){
        $('.audio-img').attr('src',"https://img.icons8.com/ios-glyphs/30/000000/no-audio--v1.png");
    }else {
        $('.audio-img').attr('src',"https://img.icons8.com/ios-glyphs/30/000000/high-volume--v1.png");
    }
}

function controlAudioSound(){
    if(audio) {
        $('#au').trigger('play');
    }else {
        $('#au').trigger('pause');
        $('#au').prop("currentTime",0);
    }
}