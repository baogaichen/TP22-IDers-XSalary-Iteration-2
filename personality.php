<?php
$extrovert = 0;
$introvert = 0;
$intuitive = 0;
$sensing = 0;
$feeling = 0;
$thinking = 0;
$judging = 0;
$perceiving = 0;
$mbti_type = "";

$career_advice = array(
    "ISTJ"=>"Your personality traits: Serious, talk less, rely on energy to concentrate and follow through. Pay attention to practice, be orderly, seek truth from facts, be logical, realistic and trustworthy. 
    <br>Try to organize everything. Responsible, they decide what to do themselves and are unwilling to oppose or interfere with it, and are determined to get it done.
    <br>Professional career recommendations: IT programmers, astronomers, database management, accountants,
    <br>real estate agents, administration, meteorologists, health care administrators, auditors, accountants, etc.
    ",
    "ISFJ" =>"Your personality traits: few words, friendly, responsible and serious. Work diligently to fulfill your responsibilities.
    <br>Can make any project and group more stable. Thoughtful, hardworking, and accurate.
    <br>Their interests are usually not technical. Ability to be patient with necessary details, loyal, considerate, insightful, and caring about what others think.
    <br>Professional career recommendations: Physician, nutritionist, librarian/archivist, interior decorator, customer service specialist, bookkeeper,
    <br>special education teacher, hotel management, paralegal, personnel management, nutritionist, tutor/counselor, insurance agent, etc.
    ",
    "INFJ"=>"Your personality traits: Rely on perseverance to achieve success, be creative, and want to do what needs to be done and what you want to do.
    <br>Devote yourself fully to your work. Quietly strong, responsible, and caring. Respected for his strong principles.
    <br>Others are likely to respect and follow them because of their clear vision of how best to serve the common good.
    <br>Professional career recommendations: Architectural designers, training managers/trainers, career counselors, psychological counselors, website editors,
    <br>writers, arbitrators, human resources managers, editors/art directors, writers, marketers, interpreters, etc.
    ",
    "INTJ"=>"Your personality traits: Creative thinkers and strong promoters of their own ideas and goals. They have a far-sighted vision and can quickly find meaningful patterns in external events.
    <br>In areas that appeal to them, they have a good ability to organize work and see it through to the end.
    <br>Untrustworthy, critical, independent, determined, with high standards of ability and action.
    <br>Professional career recommendations: financial personnel, intellectual property lawyers, design engineers, psychoanalysts, cardiologists, media planners,
    <br>network administrators, economists, technical experts, medical experts, financial experts, inventors, etc.
    ",
    "ISTP"=>"Your personality traits: A calm bystander - few words, self-controlled, observing and analyzing life with unique curiosity and unexpectedly creative humor.
    <br>Often interested in causes and effects, how and why mechanical things work, and organizing facts using logical principles.
    <br>Good at getting to the core of practical problems and finding solutions.
    <br>Professional career recommendations: information service industry managers, computer programmers, police officers, software developers,
    <br>paralegals, firefighters, pharmacists, business elites, bank clerks, management consultants, pharmacists, animal trainers, etc.
    ",
    "ISFP"=>"Your personality traits: Shyness, quiet friendliness, sensitivity, harmony, modesty about one's own abilities. Avoid arguments and do not impose your views and values on others.
    <br>Generally speaking, they have no intention of doing leadership work, but they are often loyal followers.
    <br>Because they enjoy the pleasure in front of them, they often relax when things are done and do not want to let excessive urgency and trouble destroy this enjoyment.
    <br>Professional career recommendations: customer service specialists, fashion designers, chefs, nurses, dentists,
    <br>tourism managers, garden designers, customer service, surveyors, administrators, etc.
    ",
    "INFP"=>"Your personality traits: Calm observer, idealistic, loyal, emphasizing the consistency between external life and internal values. Have a thirst for knowledge and can quickly identify various possibilities, often playing a role in promoting the implementation of some ideas.
    <br>They are adaptable, flexible and accepting as long as certain values are not threatened.
    <br>A willingness to understand others and understand ways to bring out the best in people. Don't care much about wealth and things around you.
    <br>Professional career recommendations: psychologist, human resource management, translator, university teacher (humanities),
    <br>social worker, editor, career planner, fashion designer, massage therapist, consultant, etc.
    ",
    "INTP"=>"Your personality traits: Taciturn. Especially interested in theoretical or scientific pursuits. Loves to use logic and analysis to solve problems.
    <br>Mainly interested in coming up with ideas and not very fond of parties and chatting.
    <br>Prefer hobbies with a clear scope. Seek careers in which some of their special hobbies can be put to use and useful.
    <br>Professional career recommendations: software designers, venture capitalists, legal arbitrators, financial analysts, university teachers,
    <br>musicians, website designers, architects, financial analysts, economists, university professors, strategic planners, etc.
    ",
    "ESTP"=>"Your personality traits: Good at solving problems on the spot. Likes action and is happy with any progress. They tend to like mechanical things and sports, and would like to have friends around them.
    <br>Adaptable, tolerant, and pragmatic; focus on achieving results. Don't like to explain too much.
    <br>Most like social things that can be done well, can be mastered, can be analyzed, and can be unified.
    <br>Professional career recommendations: entrepreneurs, insurance brokers, civil engineers, tourism management, professional athletes/coaches, video game developers,
    <br>real estate developers, promoters, securities brokers, management consultants, firefighters, police, etc.
    ",
    "ESFP"=>"Your personality traits: Cheerful, easy-going, friendly, like everything and make things more interesting to others because of their preferences. Likes to take action and make things happen.
    <br>They understand what is going on and actively participate. Think it's easier to memorize facts than to master theories.
    <br>Performs best in situations that require extensive knowledge and practical abilities.
    <br>Professional career recommendations: preschool teachers, public relations specialists, planning consultants, tourism managers/tour guides,
    <br>promoters, actors, marine biologists, sales, dentists, veterinarians, trainers, financiers, etc.
    ",
    "ENFP"=>"Your personality traits: Extremely enthusiastic, energetic, alert, and imaginative. Able to do almost anything that interests them.
    <br>He can quickly provide solutions to any difficulties and is always ready to help anyone who encounters a problem.
    <br>Often improvise based on their own abilities rather than preparing in advance. Often can find compelling reasons for whatever they want to do.
    <br>Professional career recommendations: Advertising account management, management consultant, actor, graphic designer, art director, corporate team trainer, psychologist,
    <br>human resources management, spokesperson, public relations, entrepreneurial mentor, program planner, writer, producer , speaker, etc.
    ",
    "ENTP"=>"Your personality traits: Agile, inventive genius, good at many things. Encouraging companion, alert, outspoken. Any aspect of an issue may be argued out of amusement.
    <br>Resourceful in solving new and challenging problems, but may neglect day-to-day tasks.
    <br>It is easy to shift interests from one point to another. Able to easily find logical reasons for their requests.
    <br>Professional career recommendations: entrepreneurs, investment bankers, advertising creative directors,
    <br>marketing management consultants, copywriters, radio/TV hosts, actors, university presidents, inventors, etc.
    ",
    "ESTJ"=>"Your personality traits: Practical and realistic. Because he has a natural business or mechanical mind, he is not interested in abstract theories and hopes to learn so that he can apply them directly and immediately.
    <br>Like to organize and participate in activities; usually can be an excellent leader,
    <br>act decisively and quickly to implement decisions; consider various details of daily affairs.
    <br>Professional career recommendations: company CEO, military officer, pharmacist, real estate agent, insurance agent,
    <br>teacher, property management, chief information officer, information director, project manager, etc.
    ",
    "ESFJ"=>"Your personality traits: Enthusiastic, talkative, popular, responsible, natural collaborator, active committee member.
    <br>Requires harmony and may be good at creating it. Always do good things for others.
    <br>Work best when you receive encouragement and praise. The main interest lies in those things that have a direct and obvious impact on people's lives.
    <br>Professional career recommendations: real estate agents, retailers, nurses, tally clerks/purchasing, sports coaches, catering industry management,
    <br>tourism management, veterinarians, home health practitioners, human resources consultants, secretaries, etc.
    ",
    "ENFJ"=>"Your personality traits: sensitive, responsible. Genuinely care about what others think and want. Try to give due consideration to other people's feelings when dealing with things.
    <br>Ability to make suggestions or lead group discussions with ease and tact. Sociable, popular, and compassionate.
    <br>Be sensitive to praise and criticism. Loves making things easier and enabling people to reach their potential.
    <br>Professional career recommendations: advertising account management, magazine editor, company trainer, TV producer, marketing specialist, writer, social worker
    <br>human resource management, clinician, career planner, university professor, sales manager, IT, reporter, etc.
    ",
    "ENTJ"=>"Your personality traits: straightforward, decisive, leader of various activities. Develop and implement complete systems to solve organizational problems.
    <br>Good at anything that requires argument and witty conversation, such as public speaking.
    <br>Often very knowledgeable and enjoy increasing their knowledge.
    <br>Professional career recommendations: company CEOs, management consultants, politicians, real estate developers, educational consultants, investment consultants,
    <br>judges, Internet experts, personal financial consultants, intellectual property lawyers, economic analysts, etc.
    ",
);


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key=>$value){
        if($value === "extrovert"){
            $extrovert++;
        }
        else if($value === "introvert"){
            $introvert++;
        }
        else if($value === "intuitive"){
            $intuitive++;
        }
        else if($value ==="sensing"){
            $sensing++;
        }
        else if($value ==="feeling"){
            $feeling++;
        }
        else if($value ==="thinking"){
            $thinking++;
        }
        else if($value ==="judging"){
            $judging++;
        }
        else if($value ==="judging"){
            $judging++;
        }
    }
    if(sizeof($_POST)<14){
        $result = "please answer more question to get a result";
    }
    else{
        if($extrovert>$introvert){
            $mbti_type = $mbti_type."E";
        }
        else{
            $mbti_type = $mbti_type."I";
        }
        if($intuitive>$sensing){
            $mbti_type = $mbti_type."N";
        }
        else{
            $mbti_type = $mbti_type."S";
        }
        if($feeling>$thinking){
            $mbti_type = $mbti_type."F";
        }
        else{
            $mbti_type = $mbti_type."T";
        }
        if($judging>$perceiving){
            $mbti_type = $mbti_type."J";
        }
        else{
            $mbti_type = $mbti_type."P";
        }

        $result = $career_advice[$mbti_type];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">


    <link rel="apple-touch-icon" sizes="180x180" href="./css/assets/X-icon.png">
    <link href="./css/assets/X-icon.png" rel="icon">

    <link rel="stylesheet" href="">


    <link href="css/main.550dcf66.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSalary - Personality</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
    <script defer src="js/results.js"></script>

</head>
<body> <!-- Add your content of header -->
<header>
    <nav class="navbar navbar-default active">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.html" title="">
                    <img src="Images/logo.png" height ="80em" class="navbar-logo-img" alt="">
                    XSalary
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.html" title="">Home</a></li>
                    <li><a href="profile.html" title="">Future Salary</a></li>
                    <li><a href="personality.html" title="">Personality Test</a></li>
                    <li>
                        <p>
                            <a href="profile.html" class="btn btn-default navbar-btn" title="">Start journey</a>
                        </p>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="section-container" id="result_section"></div>
<div class="section-container">
    <div class="container">
        <div class="col-xs-12 col-md-12">
            <div class="text-center">
                <h2>Your Result</h2>
                <p><?= $result?></p>
            </div>
        </div>
    </div>
</div>


</body>
<footer class="footer-container white-text-container">
    <div class="container">
        <div class="row">


            <div class="col-xs-12">
                <h3>XSalary</h3>

                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <p><small> &copy; 2023 IDers(TP22). All rights reserved. </small>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <p class="text-right">
                            <a href="https://facebook.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="https://twitter.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/" class="social-round-icon white-round-icon fa-icon" title="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</footer>
</html>