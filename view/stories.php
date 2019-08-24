<?php
session_start();
include '../action/DbConnection.php';
include '../includes/header.php';
include '../includes/nav.php';
?>

    <div class="container-fluid">
        <div class="row pt-4">
            <div class="col-2"></div>
            <div class="col-8">
                <h3 class="text-muted font-weight-bold">SHARE YOUR STORIES</h3>
                <hr>
                <textarea type="text" id="report" name="report" class="form-control" placeholder="Add your story"></textarea>
                <div class="pt-2 text-right"><button class="btn btn-outline-info btn-rounded pt-2" type="submit" name="btn_comment" value="Save">Share</button>
                </div>
                <hr>
                <div class="pt-4">
                    <div class="card">
                        <p class="p-4" style="font-size: 18px;">
                            “This is something I have never told anyone and I finally gathered the courage to talk about it. When I was about 6-7 years old my sister
                            and I used to play this game when my parents were not around. You know how girls usually have these role-playing games like being husband
                            and wife and all that, so I used to force my sister to play with me. And one play when we were playing that my sister told me to take off my clothes
                            and she took off her clothes and she started kissing me and stuff. I didn't give it much thought until one day I learned about harassment and consent
                            and like that is when I realized I was harassed by my sister I mean it has been years since that incident and I love my sister and I know that she loves
                            me too but lately I don't know why but this has been bothering me and I don't know if I should confront her because she was young too and we have such a
                            good relationship and I don't want to ruin it. But I also don't want to affect my mental health so what should I do?"
                        </p>
                    </div>
                </div>

                <div class="pt-4">
                    <div class="card">
                        <p class="p-4" style="font-size: 18px;">
                            "Though I am a boy, I have something to say and want some suggestions. I live in Balkot and whenever I take the bus, it is too packed, 2-3 times this incident
                            has happened to me. Once when I was standing, a girl came closer and started to remain touchy. She started to tilt her body towards me and starts catching my hand.
                            If I say her not to do so, what if she yells and blames at me for my undone mistakes. I need suggestions on what to do at those times. Its first time I am sharing
                            to someone if I share with friends they say talai ta ramailo vayecha."
                        </p>
                    </div>
                </div>
                <div class="pt-4">
                    <div class="card">
                        <p class="p-4" style="font-size: 18px;">
                            "I had also experienced harassment at a very small age I was aged 9 when I was harassed. I didn't get it then but now I know it was wrong. I was
                            in my mamaghar playing and then my so dai (mama ko chora) called me inside and asked me to take off my pants and touched my vagina and smelled it.
                            He was aged 16/17 thankfully he didn't do anything wrong more than that. He told me to go outside then as a kid I was unknown but I feel so bad realizing it now.
                            Human is not human nowadays they have become a monster. Parents are very careful don't ever leave your kids even with the known relatives and families it is so dangerous
                            thing to do please."


                        </p>
                    </div>
                </div>
                </div>


            <div class="col-2"></div>
        </div>
    </div>

<?php include '../includes/footer.php'; ?>