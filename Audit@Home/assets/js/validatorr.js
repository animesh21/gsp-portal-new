$(document).ready(function(e){

    $("input[name=Q5F1S1]").click(function(e){
        var val = this.value;
        var typeOfSchool = $('#Q9G1').val();
        if(val != 'Y' && val != 'N')
        {
            if(typeOfSchool < 3 && val != 1)
            {
                alert("You have selected government school");
            }
            if(typeOfSchool == 3 && val == 1)
            {
                alert("You have selected private school")
            }
        }


    });

    $("#Q8Wa1S1").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa1S1').value;
        var Recyclable1 = document.getElementById('Q6Wa1S1').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa1S2").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa1S2').value;
        var Recyclable1 = document.getElementById('Q6Wa1S2').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }
    });
    $("#Q8Wa1S3").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa1S3').value;
        var Recyclable1 = document.getElementById('Q6Wa1S3').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa1S4").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa1S4').value;
        var Recyclable1 = document.getElementById('Q6Wa1S4').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });

    $("#Q8Wa2S1").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa2S1').value;
        var Recyclable1 = document.getElementById('Q6Wa2S1').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa2S2").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa2S2').value;
        var Recyclable1 = document.getElementById('Q6Wa2S2').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa2S3").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa2S3').value;
        var Recyclable1 = document.getElementById('Q6Wa2S3').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa2S4").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa2S4').value;
        var Recyclable1 = document.getElementById('Q6Wa2S4').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }
    });
    $("#Q8Wa2S5").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa2S5').value;
        var Recyclable1 = document.getElementById('Q6Wa2S5').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa2S6").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa2S6').value;
        var Recyclable1 = document.getElementById('Q6Wa2S6').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }
    });
    $("#Q8Wa2S7").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa2S7').value;
        var Recyclable1 = document.getElementById('Q6Wa2S7').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });

    $("#Q8Wa3S1").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa3S1').value;
        var Recyclable1 = document.getElementById('Q6Wa3S1').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa3S2").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa3S2').value;
        var Recyclable1 = document.getElementById('Q6Wa3S2').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });

    $("#Q8Wa4S1").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa4S1').value;
        var Recyclable1 = document.getElementById('Q6Wa4S1').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa5S1").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa5S1').value;
        var Recyclable1 = document.getElementById('Q6Wa5S1').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa6S1").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa6S1').value;
        var Recyclable1 = document.getElementById('Q6Wa6S1').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });
    $("#Q8Wa7S1").keypress(function(e){
        var val = parseFloat(this.value + e.key);
        var Recyclable = document.getElementById('Q6Wa7S1').value;
        var Recyclable1 = document.getElementById('Q6Wa7S1').placeholder;

        if (val > Recyclable && val > Recyclable1)
        {
            alert("the value of solid waste recycle cannot exceed solid waste generated");
            e.preventDefault();
        }

    });


    $("#std").keypress(function(e){
        var patt = /^\d{0,5}$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q6E1S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E1S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }



    });

    $("#Q6E2S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E2S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }



    });

    $("#Q6E3S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E3S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }
    });

    $("#Q6E4S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E4S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }

    });

    $("#Q6E5S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E5S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }



    });

    $("#Q6E6S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E6S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }



    });

    $("#Q6E7S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E7S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }



    });

    $("#Q6E8S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E8S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }



    });

    // $("#Q6E8S3").keypress(function(e){
    //     var patt = /^[0-5]$/g;

    //     var val = (this.value + e.key).length;
    //     console.log(patt.test(val),!patt.test(val))
    //     if(val > 11)
    //     {
    //         e.preventDefault();
    //     }
    //     else if (patt.test(e.key) && !this.value.includes(""+e.key))
    //     {
    //         if (this.value != "")
    //         {
    //             $('#Q6E8S3').val(this.value + ",");
    //         }
    //     }
    //     else
    //     {
    //         e.preventDefault();
    //     }

    // });

    $("#Q6E9S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E9S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }



    });

    $("#Q6E10S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E10S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }

    });

    $("#Q6E11S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E11S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }
    });



/*  new code by jeetu  */ 

    $("#Q6E16S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E16S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }
    });


    $("#Q6E12S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E12S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }
    });



    $("#Q6E13S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E13S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }
    });


    $("#Q6E14S3").keypress(function(e){
        var patt = /^[0-6]$/g;

        var val = (this.value + e.key).length;
        console.log(patt.test(val),!patt.test(val))
        if(val > 12)
        {
            e.preventDefault();
        }
        else if (patt.test(e.key) && !this.value.includes(""+e.key))
        {
            if (this.value != "")
            {
                $('#Q6E14S3').val(this.value + ",");
            }
        }
        else
        {
            e.preventDefault();
        }
    });




/*  new code by  jeetu  */ 





    $("#Q4L1").keypress(function(e){
        var val = this.value + e.key;
        if (val <=0){
            e.preventDefault();
        }

    });
    $("#Q4L12").keypress(function(e){
        var val = parseInt(this.value + e.key);
        if (val > 10 || val < 0){
            e.preventDefault();
        }

    });


    $("#Q5F1S2A").keypress(function(e){
        var patt = /^\d{0,5}$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }
        else
        {
            var pop = parseInt($('#Q4G1S3').val());
            var current = parseInt(val);
            console.log(pop,current);
            if(current > pop)
            {
                alert("Number of students("+current+") bringing home made food as lunch cannot exceed total student population in General Question("+pop+") ")
                $('#Q5F1S2A').val(0);
                e.preventDefault();
            }
        }
    });
    $("#Q5F1S3A").keypress(function(e){
        var patt = /^\d{0,5}$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }
        else
        {
            var pop = parseInt(document.getElementById('Q5F1S2A').value);
            var pop1 = parseInt(document.getElementById('Q5F1S2A').placeholder);

            var current = parseInt(val);
            console.log(pop,current);
            if(current > pop || current > pop1)
            {
                alert("Number of students("+current+") bringing packaged food as lunch cannot exceed students bringing home made food ("+pop+") ")
                $('#Q5F1S3A').val(0);
                e.preventDefault();
            }
        }
    });

    $(window).unload(function(){
        alert('Bye.');
    });


    $("#telephone").keypress(function(e){
        var patt = /^\d{0,10}$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#comobile").keypress(function(e){
        var patt = /^\d{0,10}$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#mobile").keypress(function(e){
        var patt = /^\d{0,10}$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });


    $("#Q5G1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q5G2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });



    $("#male").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#female").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#teacherMale").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#teacherFemale").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#NteacherMale").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#NteacherFemale").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q6G1").keypress(function(e){

        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();

        }
        else
        {
            var val = parseInt(this.value + e.key);
            console.log(val)
            //debugger;

            if (val > 366){
                e.preventDefault();
            }
        }

    });
    $("#Q8E1").keypress(function(e){

        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();

        }
        else
        {
            var val = parseInt(this.value + e.key);
            console.log(val)
            //debugger;

            if (val > 366){
                e.preventDefault();
            }
        }

    });

    $("#Q8A1").keypress(function(e){

        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();

        }
        else
        {
            var val = parseInt(this.value + e.key);
            var total = parseInt($('#Q4G1S3').val());
            console.log('Value of Q4G1S3: ' + total);
            console.log(total);
            console.log(val);
            //debugger;

            if (val > total){
                alert("No. of students suffering from respiratory problems in question 5 ("+val+") cannot be more than total student population in General Questions ("+total+")");
                e.preventDefault();
            }
        }




    });

    $("#Q7A1S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q7A1S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A1S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A2S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A2S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A2S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A3S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A3S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A3S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q7A4S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A4S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A4S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q7A5S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A5S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A5S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A6S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A6S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A6S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A7S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A7S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A7S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A8S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A8S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A8S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A9S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A9S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A9S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A10S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A10S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A10S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A11S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A11S2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7A11S3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });


    $("#b1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#c1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#v1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#o1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#b2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#c2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#v2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#o2").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#b3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#c3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#v3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#o3").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#b4").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#c4").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#v4").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#o4").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#b5").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#c5").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#v5").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#o5").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q7E1S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q7E2S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q7E3S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q7E4S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q7E5S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q7E6S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7E7S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });
    $("#Q7E8S1").keypress(function(e){
        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();
        }

    });

    $("#Q5F3S1").keypress(function(e){

        var patt = /^\d*$/g;
        var val = this.value + e.key;
        console.log(patt.test(val),!patt.test(val))
        //debugger;

        if (!patt.test(val)){
            e.preventDefault();

        }
        else
        {
            var val = parseInt(this.value + e.key);
            var total = parseInt($('#Q4G1S3').val());

            console.log(val)
            //debugger;

            if (val > total){
                alert("No. of students("+val+") availing mid day meal service cannot exceed total student population in  General Questions ("+total+")");
                e.preventDefault();
            }
        }




    });

    $('#Q6E14S1').change(function(){
        computeJoules();
    });

});
function AvailableState(type)
{
    if(type==1)
    {
        document.getElementById('Q6A3S1').style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById('Q6A3S1').style.display = 'none';

    }
}

function ComputePrimary()
{
    var lower = document.getElementById('Q1G1').value;
    var higher = document.getElementById('Q1G2').value;

    lower = parseInt(lower);
    higher = parseInt(higher);

    if(lower > higher)
    {
        alert("Value of highest level of grade should not be less than value of lowest level of grade");
        $('#Q1G1').val(0);
    }

}
function WindowFloorRatio(value)
{
    var x = parseFloat(value)
    // Clear the Data
    for(i=1; i<=10; i++)
    {
        var id1 = "Q5AzS1".replace("z",i);
        var id2 = "Q5AzS2".replace("z",i);
        var id3 = "Q5AzS3".replace("z",i);
        var id4 = "Q5AzS4".replace("z",i);
        var id5 = "A1Sz".replace("z",i);

        $('#'+id1).val('');
        $('#'+id2).val('');
        $('#'+id3).val('');
        $('#'+id4).val('');

        document.getElementById(''+id1).placeholder = '';
        document.getElementById(''+id2).placeholder = '';
        document.getElementById(''+id3).placeholder = '';
        document.getElementById(''+id4).placeholder = '';

        document.getElementById(''+id1).style.display = 'none';
        document.getElementById(''+id2).style.display = 'none';
        document.getElementById(''+id3).style.display = 'none';
        document.getElementById(''+id4).style.display = 'none';
        document.getElementById(''+id5).style.display = 'none';

    }

    if(!isNaN(x))
    {

        if(x>10)
            x = 10;

        for(i=1; i<=x; i++)
        {

            var id1 = "Q5AzS1".replace("z",i);
            var id2 = "Q5AzS2".replace("z",i);
            var id3 = "Q5AzS3".replace("z",i);
            var id4 = "Q5AzS4".replace("z",i);

            var id5 = "A1Sz".replace("z",i);

            console.log(id5);

            document.getElementById(''+id1).style.display = 'block';
            document.getElementById(''+id2).style.display = 'block';
            document.getElementById(''+id3).style.display = 'block';
            document.getElementById(''+id4).style.display = 'block';
            document.getElementById(''+id5).style.display = 'block';

            document.getElementById(''+id1).required = 'true';
            document.getElementById(''+id2).required = 'true';
            document.getElementById(''+id3).required = 'true';
            document.getElementById(''+id4).required = 'true';
        }
    }
}


function StateValidation(type)
{
    if(type == 1)
    {

        document.getElementById("Q3G2").style.display = 'block';
        $('#Q3G1O').prop('readonly',true);
    }
    if(type == 2)
    {
        document.getElementById("Q3G2").style.display = 'none';
        $('#Q3G1O').prop('readonly',true);
    }
    if(type == 3)
    {
        $('#Q3G1O').prop('readonly',false);
    }

}

function Gender(type)
{
    if(type == 1)
    {
        document.getElementById("female").value = 0;
        document.getElementById("female").disabled = true;
        document.getElementById("male").disabled = false;

    }
    else if(type == 2)
    {
        document.getElementById("female").disabled = false;
        document.getElementById("male").disabled = true;
        document.getElementById("male").value = 0;

    }
    else
    {
        document.getElementById("female").disabled = false;
        document.getElementById("male").disabled = false;
    }
}
function ComputeLab(type)
{
    if(type == 1)
    {

        document.getElementById("lab1").style.display = 'block';
        document.getElementById("lab").style.display = 'none';

    }
    if(type == 2)
    {
        document.getElementById("lab").style.display = 'block';
        document.getElementById("lab1").style.display = 'none';
    }

}
function CalculateStudent()
{
    var male =  document.getElementById("male").value;
    var male1 = document.getElementById("male").placeholder;
    var female = document.getElementById("female").value;
    var female1 = document.getElementById("female").placeholder;


    male = parseInt(male);
    female = parseInt(female);
    male1 = parseInt(male1);
    female1 = parseInt(female1);


    if(isNaN(male))
        if(isNaN(male1))
            male = 0;
        else
            male = male1;
    if(isNaN(female))
        if(isNaN(female1))
            female = 0;
        else
            female = female1;

    var sum1 = male + female;
    $('#mixed').val(sum1);


    var teachermale =  document.getElementById("teacherMale").value;
    var teacherfemale = document.getElementById("teacherFemale").value;
    var teachermale1 =  document.getElementById("teacherMale").placeholder;
    var teacherfemale1 = document.getElementById("teacherFemale").placeholder;

    teachermale = parseInt(teachermale);
    teacherfemale = parseInt(teacherfemale);

    teachermale1 = parseInt(teachermale1);
    teacherfemale1 = parseInt(teacherfemale1);

    if(isNaN(teachermale))
        if(isNaN(teachermale1))
            teachermale = 0;
        else
            teachermale = teachermale1;

    if(isNaN(teacherfemale))
        if(isNaN(teacherfemale1))
            teacherfemale = 0;
        else
            teacherfemale = teacherfemale1;

    var sum2 = teachermale + teacherfemale;
    $('#teacherMixed').val(sum2);

    var nteachermale =  document.getElementById("NteacherMale").value;
    var nteacherfemale = document.getElementById("NteacherFemale").value;

    var nteachermale1 =  document.getElementById("NteacherMale").placeholder;
    var nteacherfemale1 = document.getElementById("NteacherFemale").placeholder;

    nteachermale = parseInt(nteachermale);
    nteacherfemale = parseInt(nteacherfemale);

    nteachermale1 = parseFloat(nteachermale1);
    nteacherfemale1 = parseFloat(nteacherfemale1);

    if(isNaN(nteachermale))
        if(isNaN(nteachermale1))
            nteachermale = 0;
        else
            nteachermale = nteachermale1;

    if(isNaN(nteacherfemale))
        if(isNaN(nteacherfemale1))
            nteacherfemale = 0;
        else
            nteacherfemale = nteacherfemale1;

    var sum3 = nteachermale + nteacherfemale;
    $('#NteacherMixed').val(sum3);


    $('#subMale').val(male+teachermale+nteachermale);
    $('#subFemale').val(female+teacherfemale+nteacherfemale);

    $('#subMix').val(sum1+sum2+sum3);

}
function Air(type)
{
    if(type == 1)
    {
        document.getElementById("vehicle").style.display = 'none';
        document.getElementById("vehicle1").style.display = 'none';
        document.getElementById("vehicle2").style.display = 'none';
        document.getElementById("Q6A3").style.display = 'none';
        for(i=1;i<=6;i++)
        {
            var id1 = "bz".replace("z",i);
            var id2 = "cz".replace("z",i);
            var id3 = "vz".replace("z",i);
            var id4 = "oz".replace("z",i);
            var id5 = "tz".replace("z",i);

            $('#'+id1).removeAttr('value');
            $('#'+id2).removeAttr('value');
            $('#'+id3).removeAttr('value');
            $('#'+id4).removeAttr('value');
            $('#'+id5).removeAttr('value');

            $('#'+id1).removeAttr('placeholder');
            $('#'+id2).removeAttr('placeholder');
            $('#'+id3).removeAttr('placeholder');
            $('#'+id4).removeAttr('placeholder');
            $('#'+id5).removeAttr('placeholder');
        }
        for(i=1;i<=6;i++)
        {
            var id1 = "S3Dz".replace("z",i);
            var id2 = "S3Pz".replace("z",i);
            var id3 = "S3Lz".replace("z",i);
            var id4 = "S3Cz".replace("z",i);
            var id5 = "S3Ez".replace("z",i);
            var id6 = "S3Hz".replace("z",i);
            var id7 = "S3Bz".replace("z",i);

            $('#'+id1).removeAttr('value');
            $('#'+id2).removeAttr('value');
            $('#'+id3).removeAttr('value');
            $('#'+id4).removeAttr('value');
            $('#'+id5).removeAttr('value');
            $('#'+id6).removeAttr('value');
            $('#'+id7).removeAttr('value');

            $('#'+id1).removeAttr('placeholder');
            $('#'+id2).removeAttr('placeholder');
            $('#'+id3).removeAttr('placeholder');
            $('#'+id4).removeAttr('placeholder');
            $('#'+id5).removeAttr('placeholder');
            $('#'+id6).removeAttr('placeholder');
            $('#'+id7).removeAttr('placeholder');
        }
        $('#Q6A3Answer').removeAttr('value');

    }
    if(type == 2)
    {
        document.getElementById("vehicle").style.display = 'block';
        document.getElementById("vehicle2").style.display = 'block';
        document.getElementById("vehicle1").style.display = 'block';
        document.getElementById("Q6A3").style.display = 'block';

    }
}
function details()
{
    var NFVb1 =  document.getElementById("b1").value;
    var NFVc1 = document.getElementById("c1").value;
    var NFVv1 = document.getElementById("v1").value;
    var NFVo1 = document.getElementById("o1").value;

    var NFVb11 =  document.getElementById("b1").placeholder;
    var NFVc11 = document.getElementById("c1").placeholder;
    var NFVv11 = document.getElementById("v1").placeholder;
    var NFVo11 = document.getElementById("o1").placeholder;


    NFVb1 = parseFloat(NFVb1);
    NFVc1 = parseFloat(NFVc1);
    NFVv1  = parseFloat(NFVv1 );
    NFVo1 = parseFloat(NFVo1);
    NFVb11 = parseFloat(NFVb11);
    NFVc11 = parseFloat(NFVc11);
    NFVv11  = parseFloat(NFVv11 );
    NFVo11 = parseFloat(NFVo11);

    if(isNaN(NFVb1))
        if(isNaN(NFVb11))
            NFVb1 = 0;
        else
            NFVb1 = NFVb11
    if(isNaN(NFVc1))
        if(isNaN(NFVc11))
            NFVc1 = 0;
        else
            NFVc1 = NFVc11;

    if(isNaN(NFVv1))
        if(isNaN(NFVv11))
            NFVv1 = 0;
        else
            NFVv1 = NFVv11;


    if(isNaN(NFVo1))
        if(isNaN(NFVo11))
            NFVo1 = 0;
        else
            NFVo1 = NFVo11;



    var sum1 = NFVb1 + NFVc1 +NFVv1 +NFVo1 ;
    $('#t1').val(sum1);

    var NFVb2 =  document.getElementById("b2").value;
    var NFVc2 = document.getElementById("c2").value;
    var NFVv2 = document.getElementById("v2").value;
    var NFVo2 = document.getElementById("o2").value;
    var NFVb21 =  document.getElementById("b2").placeholder;
    var NFVc21 = document.getElementById("c2").placeholder;
    var NFVv21 = document.getElementById("v2").placeholder;
    var NFVo21 = document.getElementById("o2").placeholder;

    NFVb2 = parseFloat(NFVb2);
    NFVc2 = parseFloat(NFVc2);
    NFVv2  = parseFloat(NFVv2 );
    NFVo2 = parseFloat(NFVo2);
    NFVb21 = parseFloat(NFVb21);
    NFVc21 = parseFloat(NFVc21);
    NFVv21  = parseFloat(NFVv21 );
    NFVo21 = parseFloat(NFVo21);

    if(isNaN(NFVb2))
        if(isNaN(NFVb21))
            NFVb2 = 0;
        else
            NFVb2 = NFVb21
    if(isNaN(NFVc2))
        if(isNaN(NFVc21))
            NFVc2 = 0;
        else
            NFVc2 = NFVc21;

    if(isNaN(NFVv2))
        if(isNaN(NFVv21))
            NFVv2 = 0;
        else
            NFVv2 = NFVv21;


    if(isNaN(NFVo2))
        if(isNaN(NFVo21))
            NFVo2 = 0;
        else
            NFVo2 = NFVo11;

    // if(NFVc2 > NFVc1)
    // {
    //     NFVc2 = 0;
    //     $("b2").val(NFVc2);
    //
    // }
    // if(NFVb2 > NFVb1)
    // {
    //     NFVb2 = 0;
    //     $("b2").val(NFVb2);
    //
    // }
    // if(NFVv2 > NFVv1)
    // {
    //     NFVb2 = 0;
    //     $("b2").val(NFVb2);
    //
    // }
    // if(NFVo2 > NFVo1)
    // {
    //     NFVb2 = 0;
    //     $("b2").val(NFVb2);
    //
    // }
    var sum2 = NFVb2 + NFVc2 +NFVv2 +NFVo2 ;
    if(sum2 > sum1)
    {

        alert('Please enter lower value then the total');
        document.getElementById("b2").value = 0;
        document.getElementById("c2").value = 0;
        document.getElementById("v2").value = 0;
        document.getElementById("o2").value = 0

    }
    else
    {
        $('#t2').val(sum2);
    }
    var NFVb3 =  document.getElementById("b3").value;
    var NFVc3 = document.getElementById("c3").value;
    var NFVv3 = document.getElementById("v3").value;
    var NFVo3 = document.getElementById("o3").value;
    var NFVb31 =  document.getElementById("b3").placeholder;
    var NFVc31 = document.getElementById("c3").placeholder;
    var NFVv31 = document.getElementById("v3").placeholder;
    var NFVo31 = document.getElementById("o3").placeholder;

    NFVb3 = parseFloat(NFVb3);
    NFVc3 = parseFloat(NFVc3);
    NFVv3  = parseFloat(NFVv3 );
    NFVo3 = parseFloat(NFVo3);
    NFVb31 = parseFloat(NFVb31);
    NFVc31 = parseFloat(NFVc31);
    NFVv31  = parseFloat(NFVv31 );
    NFVo31 = parseFloat(NFVo31);

    if(isNaN(NFVb3))
        if(isNaN(NFVb31))
            NFVb3 = 0;
        else
            NFVb3 = NFVb31
    if(isNaN(NFVc3))
        if(isNaN(NFVc31))
            NFVc3 = 0;
        else
            NFVc3 = NFVc31;

    if(isNaN(NFVv3))
        if(isNaN(NFVv31))
            NFVv3 = 0;
        else
            NFVv3 = NFVv31;


    if(isNaN(NFVo3))
        if(isNaN(NFVo31))
            NFVo3 = 0;
        else
            NFVo3 = NFVo31;

    var sum3 = NFVb3 + NFVc3 +NFVv3 +NFVo3 ;

    if(sum3 > sum1)
    {

        alert('Please enter lower value then the total');
        document.getElementById("b3").value = 0;
        document.getElementById("c3").value = 0;
        document.getElementById("v3").value = 0;
        document.getElementById("o3").value = 0

    }
    else
    {
        $('#t3').val(sum3);

    }


    var NFVb4 =  document.getElementById("b4").value;
    var NFVc4 = document.getElementById("c4").value;
    var NFVv4 = document.getElementById("v4").value;
    var NFVo4 = document.getElementById("o4").value;
    var NFVb41 =  document.getElementById("b4").placeholder;
    var NFVc41 = document.getElementById("c4").placeholder;
    var NFVv41 = document.getElementById("v4").placeholder;
    var NFVo41 = document.getElementById("o4").placeholder;

    NFVb4 = parseFloat(NFVb4);
    NFVc4 = parseFloat(NFVc4);
    NFVv4  = parseFloat(NFVv4 );
    NFVo4 = parseFloat(NFVo4);
    NFVb41 = parseFloat(NFVb41);
    NFVc41 = parseFloat(NFVc41);
    NFVv41  = parseFloat(NFVv41 );
    NFVo41 = parseFloat(NFVo41);

    if(isNaN(NFVb4))
        if(isNaN(NFVb41))
            NFVb4 = 0;
        else
            NFVb4 = NFVb41
    if(isNaN(NFVc4))
        if(isNaN(NFVc41))
            NFVc4 = 0;
        else
            NFVc4 = NFVc41;

    if(isNaN(NFVv4))
        if(isNaN(NFVv41))
            NFVv4 = 0;
        else
            NFVv4 = NFVv41;


    if(isNaN(NFVo4))
        if(isNaN(NFVo41))
            NFVo4 = 0;
        else
            NFVo4 = NFVo41;

    var sum4 = NFVb4 + NFVc4 +NFVv4 +NFVo4;

    if(sum4 > sum1)
    {

        alert('Please enter lower value then the total');
        document.getElementById("b4").value = 0;
        document.getElementById("c4").value = 0;
        document.getElementById("v4").value = 0;
        document.getElementById("o4").value = 0

    }
    else
    {
        $('#t4').val(sum4);

    }


    var NFVb5 =  document.getElementById("b5").value;
    var NFVc5 = document.getElementById("c5").value;
    var NFVv5 = document.getElementById("v5").value;
    var NFVo5 = document.getElementById("o5").value;
    var NFVb51 =  document.getElementById("b5").placeholder;
    var NFVc51 = document.getElementById("c5").placeholder;
    var NFVv51 = document.getElementById("v5").placeholder;
    var NFVo51 = document.getElementById("o5").placeholder;


    NFVb5 = parseFloat(NFVb5);
    NFVc5 = parseFloat(NFVc5);
    NFVv5  = parseFloat(NFVv5 );
    NFVo5 = parseFloat(NFVo5);
    NFVb51 = parseFloat(NFVb51);
    NFVc51 = parseFloat(NFVc51);
    NFVv51  = parseFloat(NFVv51 );
    NFVo51 = parseFloat(NFVo51);

    if(isNaN(NFVb5))
        if(isNaN(NFVb51))
            NFVb5 = 0;
        else
            NFVb5 = NFVb51
    if(isNaN(NFVc5))
        if(isNaN(NFVc51))
            NFVc5 = 0;
        else
            NFVc5 = NFVc51;

    if(isNaN(NFVv5))
        if(isNaN(NFVv51))
            NFVv5 = 0;
        else
            NFVv5 = NFVv51;


    if(isNaN(NFVo5))
        if(isNaN(NFVo51))
            NFVo5 = 0;
        else
            NFVo5 = NFVo51;

    var sum5 = NFVb5 + NFVc5 +NFVv5 +NFVo5;
    if(sum5 > sum1)
    {

        alert('Please enter lower value then the total');
        document.getElementById("b5").value = 0;
        document.getElementById("c5").value = 0;
        document.getElementById("v5").value = 0;
        document.getElementById("o5").value = 0

    }
    else
    {
        $('#t5').val(sum5);
    }



    var NFVb5 =  document.getElementById("b6").value;
    var NFVc5 = document.getElementById("c6").value;
    var NFVv5 = document.getElementById("v6").value;
    var NFVo5 = document.getElementById("o6").value;

    var NFVb51 =  document.getElementById("b6").placeholder;
    var NFVc51 = document.getElementById("c6").placeholder;
    var NFVv51 = document.getElementById("v6").placeholder;
    var NFVo51 = document.getElementById("o6").placeholder;
    sum5 = 0;

    NFVb5 = NFVb5.toLowerCase();;
    NFVc5 = NFVc5.toLowerCase();;
    NFVv5  = NFVv5.toLowerCase();;
    NFVo5 = NFVo5.toLowerCase();;

    NFVb51 = NFVb51.toLowerCase();;
    NFVc51 = NFVc51.toLowerCase();;
    NFVv51  = NFVv51.toLowerCase();;
    NFVo51 = NFVo51.toLowerCase();;

    var countYes = 0;
    var countNo = 0;


    if(NFVb5 == "yes")
    {
        countYes++;
    }
    else if(NFVb5 == "" && NFVb51 == "yes")
    {
        countYes++;
    }
    else if(NFVb5 == "no")
    {
        countNo++;
    }
    else if(NFVb5 == "" && NFVb51 == "no")
    {
        countNo++;
    }


    if(NFVc5 == "yes")
    {
        countYes++;
    }
    else if(NFVc5 == "" && NFVc51 == "yes")
    {
        countYes++;
    }
    else if(NFVc5 == "no")
    {
        countNo++;
    }
    else if(NFVc5 == "" && NFVc1 == "no")
    {
        countNo++;
    }

    if(NFVv5 == "yes")
    {
        countYes++;
    }
    else if(NFVv5 == "" && NFVv51 == "yes")
    {
        countYes++;
    }
    else if(NFVv5 == "no")
    {
        countNo++;
    }
    else if(NFVv5 == "" && NFVv1 == "no")
    {
        countNo++;
    }

    if(NFVo5 == "yes")
    {
        countYes++;
    }
    else if(NFVo5 == "" && NFVo51 == "yes")
    {
        countYes++;
    }
    else if(NFVo5 == "no")
    {
        countNo++;
    }
    else if(NFVo5 == "" && NFVo1 == "no")
    {
        countNo++;
    }


    $('#t6').val(countYes+"/"+countNo);



}
function PrimaryDetails()
{
    var NFVb1 =  document.getElementById("b1").value;
    var NFVc1 = document.getElementById("c1").value;
    var NFVv1 = document.getElementById("v1").value;
    var NFVo1 = document.getElementById("o1").value;

    var NFVb11 =  document.getElementById("b1").placeholder;
    var NFVc11 = document.getElementById("c1").placeholder;
    var NFVv11 = document.getElementById("v1").placeholder;
    var NFVo11 = document.getElementById("o1").placeholder;


    NFVb1 = parseFloat(NFVb1);
    NFVc1 = parseFloat(NFVc1);
    NFVv1  = parseFloat(NFVv1 );
    NFVo1 = parseFloat(NFVo1);
    NFVb11 = parseFloat(NFVb11);
    NFVc11 = parseFloat(NFVc11);
    NFVv11  = parseFloat(NFVv11 );
    NFVo11 = parseFloat(NFVo11);

    if(isNaN(NFVb1))
        if(isNaN(NFVb11))
            NFVb1 = 0;
        else
            NFVb1 = NFVb11
    if(isNaN(NFVc1))
        if(isNaN(NFVc11))
            NFVc1 = 0;
        else
            NFVc1 = NFVc11;

    if(isNaN(NFVv1))
        if(isNaN(NFVv11))
            NFVv1 = 0;
        else
            NFVv1 = NFVv11;


    if(isNaN(NFVo1))
        if(isNaN(NFVo11))
            NFVo1 = 0;
        else
            NFVo1 = NFVo11;



    var sum1 = NFVb1 + NFVc1 +NFVv1 +NFVo1 ;
    $('#t1').val(sum1);

    var NFVb2 =  document.getElementById("b2").value;
    var NFVc2 = document.getElementById("c2").value;
    var NFVv2 = document.getElementById("v2").value;
    var NFVo2 = document.getElementById("o2").value;
    var NFVb21 =  document.getElementById("b2").placeholder;
    var NFVc21 = document.getElementById("c2").placeholder;
    var NFVv21 = document.getElementById("v2").placeholder;
    var NFVo21 = document.getElementById("o2").placeholder;

    NFVb2 = parseFloat(NFVb2);
    NFVc2 = parseFloat(NFVc2);
    NFVv2  = parseFloat(NFVv2 );
    NFVo2 = parseFloat(NFVo2);
    NFVb21 = parseFloat(NFVb21);
    NFVc21 = parseFloat(NFVc21);
    NFVv21  = parseFloat(NFVv21 );
    NFVo21 = parseFloat(NFVo21);

    if(isNaN(NFVb2))
        if(isNaN(NFVb21))
            NFVb2 = 0;
        else
            NFVb2 = NFVb21
    if(isNaN(NFVc2))
        if(isNaN(NFVc21))
            NFVc2 = 0;
        else
            NFVc2 = NFVc21;

    if(isNaN(NFVv2))
        if(isNaN(NFVv21))
            NFVv2 = 0;
        else
            NFVv2 = NFVv21;


    if(isNaN(NFVo2))
        if(isNaN(NFVo21))
            NFVo2 = 0;
        else
            NFVo2 = NFVo11;

    // if(NFVc2 > NFVc1)
    // {
    //     NFVc2 = 0;
    //     $("b2").val(NFVc2);
    //
    // }
    // if(NFVb2 > NFVb1)
    // {
    //     NFVb2 = 0;
    //     $("b2").val(NFVb2);
    //
    // }
    // if(NFVv2 > NFVv1)
    // {
    //     NFVb2 = 0;
    //     $("b2").val(NFVb2);
    //
    // }
    // if(NFVo2 > NFVo1)
    // {
    //     NFVb2 = 0;
    //     $("b2").val(NFVb2);
    //
    // }
    var sum2 = NFVb2 + NFVc2 +NFVv2 +NFVo2 ;
    if(sum2 > sum1)
    {

        alert('Please enter lower value then the total');
        document.getElementById("b2").value = 0;
        document.getElementById("c2").value = 0;
        document.getElementById("v2").value = 0;
        document.getElementById("o2").value = 0

    }
    else
    {
        $('#t2').val(sum2);
    }
    var NFVb3 =  document.getElementById("b3").value;
    var NFVc3 = document.getElementById("c3").value;
    var NFVv3 = document.getElementById("v3").value;
    var NFVo3 = document.getElementById("o3").value;
    var NFVb31 =  document.getElementById("b3").placeholder;
    var NFVc31 = document.getElementById("c3").placeholder;
    var NFVv31 = document.getElementById("v3").placeholder;
    var NFVo31 = document.getElementById("o3").placeholder;

    NFVb3 = parseFloat(NFVb3);
    NFVc3 = parseFloat(NFVc3);
    NFVv3  = parseFloat(NFVv3 );
    NFVo3 = parseFloat(NFVo3);
    NFVb31 = parseFloat(NFVb31);
    NFVc31 = parseFloat(NFVc31);
    NFVv31  = parseFloat(NFVv31 );
    NFVo31 = parseFloat(NFVo31);

    if(isNaN(NFVb3))
        if(isNaN(NFVb31))
            NFVb3 = 0;
        else
            NFVb3 = NFVb31
    if(isNaN(NFVc3))
        if(isNaN(NFVc31))
            NFVc3 = 0;
        else
            NFVc3 = NFVc31;

    if(isNaN(NFVv3))
        if(isNaN(NFVv31))
            NFVv3 = 0;
        else
            NFVv3 = NFVv31;


    if(isNaN(NFVo3))
        if(isNaN(NFVo31))
            NFVo3 = 0;
        else
            NFVo3 = NFVo31;

    var sum3 = NFVb3 + NFVc3 +NFVv3 +NFVo3 ;

    if(sum3 > sum1)
    {

        alert('Please enter lower value then the total');
        document.getElementById("b3").value = 0;
        document.getElementById("c3").value = 0;
        document.getElementById("v3").value = 0;
        document.getElementById("o3").value = 0

    }
    else
    {
        $('#t3').val(sum3);

    }




    var NFVb5 =  document.getElementById("b5").value;
    var NFVc5 = document.getElementById("c5").value;
    var NFVv5 = document.getElementById("v5").value;
    var NFVo5 = document.getElementById("o5").value;
    var NFVb51 =  document.getElementById("b5").placeholder;
    var NFVc51 = document.getElementById("c5").placeholder;
    var NFVv51 = document.getElementById("v5").placeholder;
    var NFVo51 = document.getElementById("o5").placeholder;


    NFVb5 = parseFloat(NFVb5);
    NFVc5 = parseFloat(NFVc5);
    NFVv5  = parseFloat(NFVv5 );
    NFVo5 = parseFloat(NFVo5);
    NFVb51 = parseFloat(NFVb51);
    NFVc51 = parseFloat(NFVc51);
    NFVv51  = parseFloat(NFVv51 );
    NFVo51 = parseFloat(NFVo51);

    if(isNaN(NFVb5))
        if(isNaN(NFVb51))
            NFVb5 = 0;
        else
            NFVb5 = NFVb51;
    if(isNaN(NFVc5))
        if(isNaN(NFVc51))
            NFVc5 = 0;
        else
            NFVc5 = NFVc51;

    if(isNaN(NFVv5))
        if(isNaN(NFVv51))
            NFVv5 = 0;
        else
            NFVv5 = NFVv51;


    if(isNaN(NFVo5))
        if(isNaN(NFVo51))
            NFVo5 = 0;
        else
            NFVo5 = NFVo51;

    var sum5 = NFVb5 + NFVc5 +NFVv5 +NFVo5;
    if(sum5 > sum1)
    {

        alert('Please enter lower value then the total');
        document.getElementById("b5").value = 0;
        document.getElementById("c5").value = 0;
        document.getElementById("v5").value = 0;
        document.getElementById("o5").value = 0

    }
    else
    {
        $('#t5').val(sum5);
    }





}


function details2()
{
    var D1 =  document.getElementById("S3D1");
    var P1 = document.getElementById("S3P1");
    var L1 = document.getElementById("S3L1");
    var C1 = document.getElementById("S3C1");
    var E1 = document.getElementById("S3E1");
    var H1 = document.getElementById("S3H1");
    var B1 = document.getElementById("S3B1");

    var D2 =  document.getElementById("S3D2");
    var P2 = document.getElementById("S3P2");
    var L2 = document.getElementById("S3L2");
    var C2 = document.getElementById("S3C2");
    var E2 = document.getElementById("S3E2");
    var H2 = document.getElementById("S3H2");
    var B2 = document.getElementById("S3B2");

    var D3 =  document.getElementById("S3D3");
    var P3 = document.getElementById("S3P3");
    var L3 = document.getElementById("S3L3");
    var C3 = document.getElementById("S3C3");
    var E3 = document.getElementById("S3E3");
    var H3 = document.getElementById("S3H3");
    var B3 = document.getElementById("S3B3");

    var D4 =  document.getElementById("S3D4");
    var P4 = document.getElementById("S3P4");
    var L4 = document.getElementById("S3L4");
    var C4 = document.getElementById("S3C4");
    var E4 = document.getElementById("S3E4");
    var H4 = document.getElementById("S3H4");
    var B4 = document.getElementById("S3B4");

    var D5 =  document.getElementById("S3D5");
    var P5 = document.getElementById("S3P5");
    var L5 = document.getElementById("S3L5");
    var C5 = document.getElementById("S3C5");
    var E5 = document.getElementById("S3E5");
    var H5 = document.getElementById("S3H5");
    var B5 = document.getElementById("S3B5");

    D1 = parseFloat(D1.value);
    P1 = parseFloat(P1.value);
    L1  = parseFloat(L1.value);
    C1 = parseFloat(C1.value);
    E1 = parseFloat(E1.value);
    H1 = parseFloat(H1.value);
    B1 = parseFloat(B1.value);
    D11 = parseFloat(D1.placeholder);
    P11 = parseFloat(P1.placeholder);
    L11  = parseFloat(L1.placeholder);
    C11 = parseFloat(C1.placeholder);
    E11  = parseFloat(E1.placeholder);
    H11 = parseFloat(H1.placeholder);
    B11 = parseFloat(B1.placeholder);

    D2 = parseFloat(D2.value);
    P2 = parseFloat(P2.value);
    L2  = parseFloat(L2.value);
    C2 = parseFloat(C2.value);
    E2 = parseFloat(E2.value);
    H2 = parseFloat(H2.value);
    B2 = parseFloat(B2.value);

    D21 = parseFloat(D2.placeholder);
    P21 = parseFloat(P2.placeholder);
    L21  = parseFloat(L2.placeholder);
    C21 = parseFloat(C2.placeholder);
    E21  = parseFloat(E2.placeholder);
    H21 = parseFloat(H2.placeholder);
    B21 = parseFloat(B2.placeholder);

    D3 = parseFloat(D3.value);
    P3 = parseFloat(P3.value);
    L3  = parseFloat(L3.value);
    C3 = parseFloat(C3.value);
    E3 = parseFloat(E3.value);
    H3 = parseFloat(H3.value);
    B3 = parseFloat(B3.value);

    D31 = parseFloat(D3.placeholder);
    P31 = parseFloat(P3.placeholder);
    L31  = parseFloat(L3.placeholder);
    C31 = parseFloat(C3.placeholder);
    E31  = parseFloat(E3.placeholder);
    H31 = parseFloat(H3.placeholder);
    B31 = parseFloat(B3.value);

    D4 = parseFloat(D4.value);
    P4 = parseFloat(P4.value);
    L4  = parseFloat(L4.value);
    C4 = parseFloat(C4.value);
    E4 = parseFloat(E4.value);
    H4 = parseFloat(H4.value);
    B4 = parseFloat(B4.value);
    D41 = parseFloat(D4.placeholder);
    P41 = parseFloat(P4.placeholder);
    L41  = parseFloat(L4.placeholder);
    C41 = parseFloat(C4.placeholder);
    E41  = parseFloat(E4.placeholder);
    H41 = parseFloat(H4.placeholder);
    B41 = parseFloat(B4.placeholder);


    if(isNaN(D1))
        if(isNaN(D11))
            D1 = 0;
        else
            D1 = D11;
    if(isNaN(P1))
        if(isNaN(P11))
            P1 = 0;
        else
            P1 = P11;
    if(isNaN(L1))
        if(isNaN(L11))
            L1 = 0;
        else
            L1 = L11;
    if(isNaN(C1))
        if(isNaN(C11))
            C1 = 0;
        else
            C1 = C11;
    if(isNaN(E1))
        if(isNaN(E11))
            E1 = 0;
        else
            E1 = E11;
    if(isNaN(H1))
        if(isNaN(H11))
            H1 = 0;
        else
            H1 = H11;

    if(isNaN(B1))
        if(isNaN(B11))
            B1 = 0;
        else
            B1 = B11;

    if(isNaN(D2))
        if(isNaN(D21))
            D2 = 0;
        else
            D2 = D21;
    if(isNaN(P2))
        if(isNaN(P21))
            P2 = 0;
        else
            P2 = P21;
    if(isNaN(L2))
        if(isNaN(L21))
            L2 = 0;
        else
            L2 = L21;
    if(isNaN(C2))
        if(isNaN(C21))
            C2 = 0;
        else
            C2 = C21;
    if(isNaN(E2))
        if(isNaN(E21))
            E2 = 0;
        else
            E2 = E21;
    if(isNaN(H2))
        if(isNaN(H21))
            H2 = 0;
        else
            H2 = H21;
    if(isNaN(B2))
        if(isNaN(B21))
            B2 = 0;
        else
            B2 = B21;

    if(isNaN(D3))
        if(isNaN(D31))
            D3 = 0;
        else
            D3 = D31;
    if(isNaN(P3))
        if(isNaN(P31))
            P3 = 0;
        else
            P3 = P31;
    if(isNaN(L3))
        if(isNaN(L31))
            L3 = 0;
        else
            L3 = L31;
    if(isNaN(C3))
        if(isNaN(C31))
            C3 = 0;
        else
            C3 = C31;
    if(isNaN(E3))
        if(isNaN(E31))
            E3 = 0;
        else
            E3 = E31;
    if(isNaN(H3))
        if(isNaN(H31))
            H3 = 0;
        else
            H3 = H31;
    if(isNaN(B3))
        if(isNaN(B31))
            B3 = 0;
        else
            B3 = B31;

    if(isNaN(D4))
        if(isNaN(D41))
            D4 = 0;
        else
            D4 = D41;
    if(isNaN(P4))
        if(isNaN(P41))
            P4 = 0;
        else
            P4 = P41;
    if(isNaN(L4))
        if(isNaN(L41))
            L4 = 0;
        else
            L4 = L41;
    if(isNaN(C4))
        if(isNaN(C41))
            C4 = 0;
        else
            C4 = C41;
    if(isNaN(E4))
        if(isNaN(E41))
            E4 = 0;
        else
            E4 = E41;
    if(isNaN(H4))
        if(isNaN(H41))
            H4 = 0;
        else
            H4 = H41;
    if(isNaN(B4))
        if(isNaN(B41))
            B4 = 0;
        else
            B4 = B41;




    total_bus = D1 + P1 + L1 + C1 + E1 + H1 + B1;
    total_cars = D2 + P2 + L2 + C2 + E2 + H2 + B2;
    total_vans = D3 + P3 + L3 + C3 + E3 + H3 + B3;
    total_other = D4 + P4 + L4 + C4 + E4 + H4 + B4;

    current_bus = parseInt(document.getElementById('b1').value);
    current_car = parseInt(document.getElementById('c1').value);
    current_vans = parseInt(document.getElementById('v1').value);
    current_others = parseInt(document.getElementById('o1').value);

    current_bus1 = parseInt(document.getElementById('b1').placeholder);
    current_car1 = parseInt(document.getElementById('c1').placeholder);
    current_vans1 = parseInt(document.getElementById('v1').placeholder);
    current_others1 = parseInt(document.getElementById('o1').placeholder);

    if(isNaN(current_bus))
        if(isNaN(current_bus1))
            current_bus = 0;
        else
            current_bus = current_bus1;

    if(isNaN(current_car))
        if(isNaN(current_car1))
            current_car = 0;
        else
            current_car = current_car1;

    if(isNaN(current_vans))
        if(isNaN(current_vans1))
            current_vans = 0;
        else
            current_vans = current_vans1;

    if(isNaN(current_others))
        if(isNaN(current_others1))
            current_others = 0;
        else
            current_others = current_others1;



    if(total_bus > current_bus)
    {
        alert("The number is greater than the number entered in question 3(a)")
        $('#S3D1').val(0);
        $('#S3P1').val(0);
        $('#S3L1').val(0);
        $('#S3C1').val(0);
        $('#S3E1').val(0);
        $('#S3H1').val(0);
        $('#S3B1').val(0);

    }
    if(total_cars > current_car)
    {
        alert("The number is greater than the number entered in question 3(a)")
        $('#S3D2').val(0);
        $('#S3P2').val(0);
        $('#S3L2').val(0);
        $('#S3C2').val(0);
        $('#S3E2').val(0);
        $('#S3H2').val(0);
        $('#S3B2').val(0);


    }
    if(total_vans > current_vans)
    {
        alert("The number is greater than the number entered in question 3(a)")
        $('#S3D3').val(0);
        $('#S3P3').val(0);
        $('#S3L3').val(0);
        $('#S3C3').val(0);
        $('#S3E3').val(0);
        $('#S3H3').val(0);
        $('#S3B3').val(0);

    }
    if(total_other > current_others)
    {
        alert("The number is greater than the number entered in question 3(a)")
        $('#S3D4').val(0);
        $('#S3P4').val(0);
        $('#S3L4').val(0);
        $('#S3C4').val(0);
        $('#S3E4').val(0);
        $('#S3H4').val(0);
        $('#S3B4').val(0);

    }

    var sum1 = D1 + D2 + D3 + D4 ;
    $('#S3D5').val(sum1);

    var sum2 = P1 + P2 + P3 + P4 ;
    $('#S3P5').val(sum2);

    var sum3 = L1 + L2 + L3 + L4 ;
    $('#S3L5').val(sum3);

    var sum4 = C1 + C2 + C3 + C4 ;
    $('#S3C5').val(sum4);

    var sum5 = E1 + E2 + E3 + E4 ;
    $('#S3E5').val(sum5);

    var sum6 = H1 + H2 + H3 + H4 ;
    $('#S3H5').val(sum6);

    var sum7 = B1 + B2 + B3 + B4;
    $("#S3B5").val(sum7);




}

function PrimaryDetails2()
{
    var D1 =  document.getElementById("S3D1");
    var P1 = document.getElementById("S3P1");
    var L1 = document.getElementById("S3L1");
    var C1 = document.getElementById("S3C1");
    var E1 = document.getElementById("S3E1");
    var H1 = document.getElementById("S3H1");
    var B1 = document.getElementById("S3B1");

    var D2 =  document.getElementById("S3D2");
    var P2 = document.getElementById("S3P2");
    var L2 = document.getElementById("S3L2");
    var C2 = document.getElementById("S3C2");
    var E2 = document.getElementById("S3E2");
    var H2 = document.getElementById("S3H2");
    var B2 = document.getElementById("S3B2");

    var D3 =  document.getElementById("S3D3");
    var P3 = document.getElementById("S3P3");
    var L3 = document.getElementById("S3L3");
    var C3 = document.getElementById("S3C3");
    var E3 = document.getElementById("S3E3");
    var H3 = document.getElementById("S3H3");
    var B3 = document.getElementById("S3B3");

    var D4 =  document.getElementById("S3D4");
    var P4 = document.getElementById("S3P4");
    var L4 = document.getElementById("S3L4");
    var C4 = document.getElementById("S3C4");
    var E4 = document.getElementById("S3E4");
    var H4 = document.getElementById("S3H4");
    var B4 = document.getElementById("S3B4");

    var D5 =  document.getElementById("S3D5");
    var P5 = document.getElementById("S3P5");
    var L5 = document.getElementById("S3L5");
    var C5 = document.getElementById("S3C5");
    var E5 = document.getElementById("S3E5");
    var H5 = document.getElementById("S3H5");
    var B5 = document.getElementById("S3B5");

    D1 = parseFloat(D1.value);
    P1 = parseFloat(P1.value);
    L1  = parseFloat(L1.value);
    C1 = parseFloat(C1.value);
    E1 = parseFloat(E1.value);
    H1 = parseFloat(H1.value);
    B1 = parseFloat(B1.value);
    D11 = parseFloat(D1.placeholder);
    P11 = parseFloat(P1.placeholder);
    L11  = parseFloat(L1.placeholder);
    C11 = parseFloat(C1.placeholder);
    E11  = parseFloat(E1.placeholder);
    H11 = parseFloat(H1.placeholder);
    B11 = parseFloat(B1.placeholder);

    D2 = parseFloat(D2.value);
    P2 = parseFloat(P2.value);
    L2  = parseFloat(L2.value);
    C2 = parseFloat(C2.value);
    E2 = parseFloat(E2.value);
    H2 = parseFloat(H2.value);
    B2 = parseFloat(B2.value);

    D21 = parseFloat(D2.placeholder);
    P21 = parseFloat(P2.placeholder);
    L21  = parseFloat(L2.placeholder);
    C21 = parseFloat(C2.placeholder);
    E21  = parseFloat(E2.placeholder);
    H21 = parseFloat(H2.placeholder);
    B21 = parseFloat(B2.placeholder);

    D3 = parseFloat(D3.value);
    P3 = parseFloat(P3.value);
    L3  = parseFloat(L3.value);
    C3 = parseFloat(C3.value);
    E3 = parseFloat(E3.value);
    H3 = parseFloat(H3.value);
    B3 = parseFloat(B3.value);

    D31 = parseFloat(D3.placeholder);
    P31 = parseFloat(P3.placeholder);
    L31  = parseFloat(L3.placeholder);
    C31 = parseFloat(C3.placeholder);
    E31  = parseFloat(E3.placeholder);
    H31 = parseFloat(H3.placeholder);
    B31 = parseFloat(B3.value);

    D4 = parseFloat(D4.value);
    P4 = parseFloat(P4.value);
    L4  = parseFloat(L4.value);
    C4 = parseFloat(C4.value);
    E4 = parseFloat(E4.value);
    H4 = parseFloat(H4.value);
    B4 = parseFloat(B4.value);
    D41 = parseFloat(D4.placeholder);
    P41 = parseFloat(P4.placeholder);
    L41  = parseFloat(L4.placeholder);
    C41 = parseFloat(C4.placeholder);
    E41  = parseFloat(E4.placeholder);
    H41 = parseFloat(H4.placeholder);
    B41 = parseFloat(B4.placeholder);


    if(isNaN(D1))
        if(isNaN(D11))
            D1 = 0;
        else
            D1 = D11;
    if(isNaN(P1))
        if(isNaN(P11))
            P1 = 0;
        else
            P1 = P11;
    if(isNaN(L1))
        if(isNaN(L11))
            L1 = 0;
        else
            L1 = L11;
    if(isNaN(C1))
        if(isNaN(C11))
            C1 = 0;
        else
            C1 = C11;
    if(isNaN(E1))
        if(isNaN(E11))
            E1 = 0;
        else
            E1 = E11;
    if(isNaN(H1))
        if(isNaN(H11))
            H1 = 0;
        else
            H1 = H11;

    if(isNaN(B1))
        if(isNaN(B11))
            B1 = 0;
        else
            B1 = B11;

    if(isNaN(D2))
        if(isNaN(D21))
            D2 = 0;
        else
            D2 = D21;
    if(isNaN(P2))
        if(isNaN(P21))
            P2 = 0;
        else
            P2 = P21;
    if(isNaN(L2))
        if(isNaN(L21))
            L2 = 0;
        else
            L2 = L21;
    if(isNaN(C2))
        if(isNaN(C21))
            C2 = 0;
        else
            C2 = C21;
    if(isNaN(E2))
        if(isNaN(E21))
            E2 = 0;
        else
            E2 = E21;
    if(isNaN(H2))
        if(isNaN(H21))
            H2 = 0;
        else
            H2 = H21;
    if(isNaN(B2))
        if(isNaN(B21))
            B2 = 0;
        else
            B2 = B21;

    if(isNaN(D3))
        if(isNaN(D31))
            D3 = 0;
        else
            D3 = D31;
    if(isNaN(P3))
        if(isNaN(P31))
            P3 = 0;
        else
            P3 = P31;
    if(isNaN(L3))
        if(isNaN(L31))
            L3 = 0;
        else
            L3 = L31;
    if(isNaN(C3))
        if(isNaN(C31))
            C3 = 0;
        else
            C3 = C31;
    if(isNaN(E3))
        if(isNaN(E31))
            E3 = 0;
        else
            E3 = E31;
    if(isNaN(H3))
        if(isNaN(H31))
            H3 = 0;
        else
            H3 = H31;
    if(isNaN(B3))
        if(isNaN(B31))
            B3 = 0;
        else
            B3 = B31;

    if(isNaN(D4))
        if(isNaN(D41))
            D4 = 0;
        else
            D4 = D41;
    if(isNaN(P4))
        if(isNaN(P41))
            P4 = 0;
        else
            P4 = P41;
    if(isNaN(L4))
        if(isNaN(L41))
            L4 = 0;
        else
            L4 = L41;
    if(isNaN(C4))
        if(isNaN(C41))
            C4 = 0;
        else
            C4 = C41;
    if(isNaN(E4))
        if(isNaN(E41))
            E4 = 0;
        else
            E4 = E41;
    if(isNaN(H4))
        if(isNaN(H41))
            H4 = 0;
        else
            H4 = H41;
    if(isNaN(B4))
        if(isNaN(B41))
            B4 = 0;
        else
            B4 = B41;




    total_bus = D1 + P1 + L1 + C1 + E1 + H1 ;
    total_cars = D2 + P2 + L2 + C2 + E2 + H2 ;
    total_vans = D3 + P3 + L3 + C3 + E3 + H3 ;
    total_other = D4 + P4 + L4 + C4 + E4 + H4 ;
    $('#S3B1').val(total_bus);
    console.log("Total Bus:"+total_bus);

    current_bus = parseInt(document.getElementById('b1').value);
    current_car = parseInt(document.getElementById('c1').value);
    current_vans = parseInt(document.getElementById('v1').value);
    current_others = parseInt(document.getElementById('o1').value);

    current_bus1 = parseInt(document.getElementById('b1').placeholder);
    current_car1 = parseInt(document.getElementById('c1').placeholder);
    current_vans1 = parseInt(document.getElementById('v1').placeholder);
    current_others1 = parseInt(document.getElementById('o1').placeholder);

    if(isNaN(current_bus))
        if(isNaN(current_bus1))
            current_bus = 0;
        else
            current_bus = current_bus1;

    if(isNaN(current_car))
        if(isNaN(current_car1))
            current_car = 0;
        else
            current_car = current_car1;

    if(isNaN(current_vans))
        if(isNaN(current_vans1))
            current_vans = 0;
        else
            current_vans = current_vans1;

    if(isNaN(current_others))
        if(isNaN(current_others1))
            current_others = 0;
        else
            current_others = current_others1;



    if(total_bus > current_bus)
    {
        alert("No. is greater than entered in question.")
        $('#S3D1').val(0);
        $('#S3P1').val(0);
        $('#S3L1').val(0);
        $('#S3C1').val(0);
        $('#S3E1').val(0);
        $('#S3H1').val(0);
        $('#S3B1').val(0);
        total_bus = 0;
    }


    if(total_cars > current_car)
    {
        alert("No. is greater than entered in question.")
        $('#S3D2').val(0);
        $('#S3P2').val(0);
        $('#S3L2').val(0);
        $('#S3C2').val(0);
        $('#S3E2').val(0);
        $('#S3H2').val(0);
        $('#S3B2').val(0);
        total_cars = 0;
    }
    else
        $('#S3B2').val(total_cars);


    if(total_vans > current_vans)
    {
        alert("No. is greater than entered in question.")
        $('#S3D3').val(0);
        $('#S3P3').val(0);
        $('#S3L3').val(0);
        $('#S3C3').val(0);
        $('#S3E3').val(0);
        $('#S3H3').val(0);
        $('#S3B3').val(0);
        total_vans = 0;
    }
    else
        $('#S3B3').val(total_vans);


    if(total_other > current_others)
    {
        alert("No. is greater than entered in question.")
        $('#S3D4').val(0);
        $('#S3P4').val(0);
        $('#S3L4').val(0);
        $('#S3C4').val(0);
        $('#S3E4').val(0);
        $('#S3H4').val(0);
        $('#S3B4').val(0);
        total_other = 0;

    }
    else
        $('#S3B4').val(total_other);

    var sum1 = D1 + D2 + D3 + D4 ;
    $('#S3D5').val(sum1);

    var sum2 = P1 + P2 + P3 + P4 ;
    $('#S3P5').val(sum2);

    var sum3 = L1 + L2 + L3 + L4 ;
    $('#S3L5').val(sum3);

    var sum4 = C1 + C2 + C3 + C4 ;
    $('#S3C5').val(sum4);

    var sum5 = E1 + E2 + E3 + E4 ;
    $('#S3E5').val(sum5);

    var sum6 = H1 + H2 + H3 + H4 ;
    $('#S3H5').val(sum6);

    var sum7 = B1 + B2 + B3 + B4;
    $("#S3B5").val(sum7);

}
function computePercent()
{
    var x = document.getElementById("WindowRatio");
    x = parseFloat(x.value);
    var sumHor = 0;
    var sumVert = 0;
	var totalsum=0;

    if(!isNaN(x))
    {	if(x > 10)
        x = 10;

        for(i=1 ;i<=x; i++)
        {
            var id1 = "Q5AzS2";
            var id2 = "Q5AzS3".replace("z",i);
            var id3 = "Q5AzS4".replace("z",i);
            id1 = id1.replace("z",i);
            var element1 = document.getElementById(id1);
            var element2 = document.getElementById(id2);
            var element3 = document.getElementById(id3);

            element1 = parseFloat(element1.value);
            var element11 = parseFloat(element1.placeholder);

            element2 = parseFloat(element2.value);
            var element21 = parseFloat(element2.placeholder);

            if(isNaN(element1))
                if(isNaN(element11))
                    element1 = 0;
                else
                    element1 = element11;

            if(isNaN(element2))
                if(isNaN(element21))
                    element2 = 0;
                else
                    element2 = element21;

            var value = (element2/element1)*100;
            element1 = parseFloat(element1);
            element2 = parseFloat(element2);
            value = parseFloat(value);
            console.log(element1+" "+element2);
            if(element1 >= element2)
            {
                if(!isNaN(value))
                    $('#'+id3).val(value.toFixed(2));
                else
                    $('#'+id3).val(0);
            }
            else
                alert("'Area of openings' must be less then 'Area of floor'");


            sumHor += element1;
            sumVert += element2;
			totalsum+=value;


        }
        $('#Q5A110S2').val(sumHor);
        $('#Q5A110S3').val(sumVert);
		$('#Q5A110S4').val((totalsum/x).toFixed(2));
        console.log(sumHor,sumVert);
        sumHor = 0;
        sumVert = 0;
        totalsum=0;
    }
}

function computeTransport()
{
	
	var ownership = $("input[name='Q6A1']:checked").val(); 

  if(ownership == '1'){
   
   var Students_school_bus = parseFloat($("input[name='Q7A1S1']").val());
   var Teaching_Staff_school_bus = parseFloat($("input[name='Q7A1S2']").val());
   var Non_Teaching_Staff_school_bus = parseFloat($("input[name='Q7A1S3']").val());   

           if(Students_school_bus > 0){
            alert('You select School does not use or own vehicles in Q3 Fill Only Zero');
            $("input[name='Q7A1S1']").val(0);
            

            }

           if(Teaching_Staff_school_bus > 0){
            alert('You select School does not use or own vehicles in Q3 Fill Only Zero');
            $("input[name='Q7A1S2']").val(0);
            

           }

           if(Non_Teaching_Staff_school_bus > 0){
            alert('You select School does not use or own vehicles in Q3 Fill Only Zero');
            $("input[name='Q7A1S3']").val(0);
            
           }
  }

	
	
	
    var student = 0;
    var teaching = 0;
    var NTeaching = 0;
    var Total = 0;

    for(i=1;i<12;i++)
    {
        var id1="Q7A"+i+"S1";
        var id2="Q7A"+i+"S2";
        var id3="Q7A"+i+"S3";
        var id4="Q7A"+i+"S4";

        var element1 = document.getElementById(id1);
        var element2 = document.getElementById(id2);
        var element3 = document.getElementById(id3);
        var element4 = document.getElementById(id4);
        var element11 = element1.placeholder;
        var element21 = element2.placeholder;
        var element31 = element3.placeholder;
        var element41 = element4.placeholder;

        element1 = parseFloat(element1.value);
        element11 = parseFloat(element11);

        element2 = parseFloat(element2.value);
        element21 = parseFloat(element21);

        element3 = parseFloat(element3.value);
        element31 = parseFloat(element31);

        element4 = parseFloat(element4.value);
        element41 = parseFloat(element41);

        if(isNaN(element1))
            if(isNaN(element11))
                element1 = 0;
            else
                element1 = element11;

        if(isNaN(element2))
            if(isNaN(element21))
                element2 = 0;
            else
                element2 = element21;

        if(isNaN(element3))
            if(isNaN(element31))
                element3 = 0;
            else
                element3 = element31;

        if(isNaN(element4))
            if(isNaN(element41))
                element4 = 0;
            else
                element4 = element41;


        var current_pop = parseInt(document.getElementById('Q4G4S3').value);
        var current_student = parseInt(document.getElementById('Q4G1S3').value);
        var current_teacher = parseInt(document.getElementById('Q4G2S3').value);
        var current_nonTeacher = parseInt(document.getElementById('Q4G3S3').value);

        student += element1;
        teaching += element2;
        NTeaching += element3;
        Total += element4;
        if(student > current_student)
        {
            alert("Total student population("+student+") doesn't match with student population mentioned in GQ("+current_student+")");
            resetAir();
            student = 0;
            die();
        }
        if(teaching > current_teacher)
        {
            alert("Total Teacher population("+teaching+") doesn't match with Teaching Staff population mentioned in GQ("+current_teacher+")");
            resetAir();
            teaching = 0;
           die();
        }
        if(NTeaching > current_nonTeacher)
        {
            alert("Total non teaching population("+NTeaching+") doesn't match with Non Teaching Staff population mentioned in GQ("+current_nonTeacher+")");
            resetAir();
            NTeaching = 0;
           die();
        }
        if(Total > current_pop || student > current_pop || teaching > current_pop || NTeaching > current_pop )
        {
            alert("Total members of the school community in Q4 ("+Total+") should be equal to total permanent population of the school in General Questions Q4a ("+current_pop+")");
            resetAir();
            Total = 0;
           die();
        }
        $('#'+id4).val(element1+element2+element3);


    }

    $('#Q7A12S1').val(student);
    $('#Q7A12S2').val(teaching);
    $('#Q7A12S3').val(NTeaching);
    $('#Q7A12S4').val(Total);
    student = 0;
    teaching = 0;
    NTeaching = 0;
    Total = 0;

}
function resetAir()
{
    for(i=1;i<14;i++)
    {
        var id1="Q7A"+i+"S1";
        var id2="Q7A"+i+"S2";
        var id3="Q7A"+i+"S3";
        var id4="Q7A"+i+"S4";

        $('#'+id1).val(0);
        $('#'+id2).val(0);
        $('#'+id3).val(0);
        $('#'+id4).val(0);

    }
}
function ElectricityBill(type)
{
    if(type == 1)
    {

        document.getElementById("ebill").style.display = 'block';
        // $("#Q6E1S1").prop('required',true);
        // $("#Q6E1S3").prop('required',true);
        // $("#Q6E1S1").prop('min',1);
        //$("#Q6E1S3").prop('min',1);


    }
    if(type == 2)
    {
        document.getElementById("ebill").style.display = 'none';
        // $("#Q6E1S1").prop('required',true);
        // $("#Q6E1S3").prop('required',true);
        // $("#Q6E1S1").prop('min',0);
        //$("#Q6E1S3").prop('min',0);

    }
}
function AlternativeSource(type)
{
    if(type == 1)
    {

        var val1 = $('#Q6E10S1').val();
        var val2 = $('#Q6E9S1').val();
        if(val1 < 1 && val2 < 1)
        {
            if (confirm("Your answer to Q6 doesn’t match with your response in Q3") == true)
            {
                //$('#Solar').prop('checked',true);
            }
            else
            {
                //$('#Solar').prop('checked',true);
            }
            $('#Q9E1').prop("checked",false);
            $('#Q6E10S1').css('border-color', 'red');
            $('#Q6E9S1').css('border-color', 'red');

        }
        else
        {
            document.getElementById("alternativeEnergy").style.display = 'block';
            document.getElementById("typeofenergy").style.display = 'block';
        }




    }
    else if(type == 2)
    {
        var val1 = $('#Q6E10S1').val();
        var val2 = $('#Q6E9S1').val();
        if(val1 < 0 && val2 < 0)
        {
            if (confirm("Your answer to Q6 doesn’t match with your response in Q3") == true)
            {
                //$('#Solar').prop('checked',true);
            }
            else
            {
                //$('#Solar').prop('checked',true);
            }
            $('#Q9E1').prop("checked",true);
            $('#Q6E10S1').css('border-color', 'red');
            $('#Q6E9S1').css('border-color', 'red');


        }
        else
        {
            document.getElementById("alternativeEnergy").style.display = 'none';
            document.getElementById("typeofenergy").style.display = 'none';
        }
    }
}
function MealsToggle(type)
{
    if(type == 2)
    {
        document.getElementById("meals1").style.display = 'none';
        document.getElementById("meals11").style.display = 'none';
        document.getElementById("Q5F2").style.display = 'none';
        document.getElementById("Q5F3").style.display = 'none';

        document.getElementById("meals2").style.display = 'block';


        var current_pop = parseInt(document.getElementById('Q4G4S3').value);
        var school_type = parseInt(document.getElementById('Q9G1').value);

        if(current_pop > 1 && school_type == 1)
        {
            alert(" YOU HAVE MENTIONED THAT YOU ARE GOVERNMENT PRIMARY SCHOOL.");
        }


    }
    if(type ==1)
    {
        document.getElementById("meals1").style.display = 'block';
        document.getElementById("meals11").style.display = 'block';
        document.getElementById("Q5F2").style.display = 'block';
        document.getElementById("Q5F3").style.display = 'block';

        document.getElementById("meals2").style.display = 'none';
        document.getElementById("Q5F1SF").style.display = 'none';
        document.getElementById("Q5F1S2").style.display = 'none';
        document.getElementById("Q5F1S3").style.display = 'none';
        document.getElementById("Q5F1S4").style.display = 'none';
        $('#Q5F1S12').prop("checked",true);
    }

}
function MealsToggletwo(type)
{
    if(type == 1)
    {
        document.getElementById("Q5F1SF").style.display = 'block';
        document.getElementById("Q5F1S2").style.display = 'block';
        document.getElementById("Q5F1S3").style.display = 'block';
        document.getElementById("Q5F1S4").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q5F1SF").style.display = 'none';
        document.getElementById("Q5F1S2").style.display = 'none';
        document.getElementById("Q5F1S3").style.display = 'none';
        document.getElementById("Q5F1S4").style.display = 'none';
    }

}
function ComputeTraditionalFood(type)
{
    if(type == 1)
    {
        document.getElementById("traditional").style.display = 'block';
        document.getElementById("Q7F2S1").style.display = 'block';
        document.getElementById("Q7F3S1").style.display = 'block';
    }
    if(type == 2)
    {
        document.getElementById("traditional").style.display = 'none';
        document.getElementById("Q7F2S1").style.display = 'none';
        document.getElementById("Q7F3S1").style.display = 'none';
    }
}

function ComputeBeverages(type)
{
    if(type == 1)
    {
        document.getElementById("beverages").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("beverages").style.display = 'none';

    }
}

function ComputePackaged(type)
{
    if(type == 1)
    {
        document.getElementById("Q9F2").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q9F2").style.display = 'none';

    }
}
function ComputeChocolates(type)
{
    if(type == 1)
    {
        document.getElementById("Q10F2").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q10F2").style.display = 'none';

    }
}

function ComputeBanners(type)
{
    if(type == 1)
    {
        document.getElementById("Q11F2").style.display = 'block';
        document.getElementById("Q11F3").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q11F2").style.display = 'none';
        document.getElementById("Q11F3").style.display = 'none';

    }
}

function computeAnimal()
{
    var Native1 = document.getElementById("Q5L1S1");
    var Exotic1 = document.getElementById("Q5L1S2");

    var Native2 = document.getElementById("Q5L2S1");
    var Exotic2 = document.getElementById("Q5L2S2");

    Native1Val = parseFloat(Native1.value);
    Native1Place = parseFloat(Native1.placeholder);
    Native2Val = parseFloat(Native2.value);
    Native2Place = parseFloat(Native2.placeholder);

    Exotic1Val = parseFloat(Exotic1.value);
    Exotic1Place = parseFloat(Exotic1.placeholder);
    Exotic2Val = parseFloat(Exotic2.value);
    Exotic2Place = parseFloat(Exotic2.placeholder);


    if(isNaN(Native1Val))
        if(isNaN(Native1Place))
            Native1Val = 0;
        else
            Native1Val = Native1Place;

    if(isNaN(Native2Val))
        if(isNaN(Native2Place))
            Native2Val = 0;
        else
            Native2Val = Native2Place;

    if(isNaN(Exotic1Val))
        if(isNaN(Exotic1Place))
            Exotic1Val = 0;
        else
            Exotic1Val = Exotic1Place;

    if(isNaN(Exotic2Val))
        if(isNaN(Exotic2Place))
            Exotic2Val = 0;
        else
            Exotic2Val = Exotic2Place;

    $('#Q5L1S3').val(Native1Val+ Exotic1Val);
    $('#Q5L2S3').val(Native2Val + Exotic2Val);
}

function WaterSupply(type)
{
    if(type == 1)
    {
        document.getElementById("Q7W2").style.display = 'block';
        document.getElementById("Q7W3").style.display = 'none';

    }
    if(type == 2)
    {
        document.getElementById("Q7W2").style.display = 'none';
        document.getElementById("Q7W3").style.display = 'block';

    }
}

function harvest(type)
{
    if(type == 1)
    {
        document.getElementById("Q8W2S1").style.display = 'block';
        document.getElementById("Q8W2S2").style.display = 'block';
        document.getElementById("Q8W2S3").style.display = 'block';
        document.getElementById("Q8W2S4").style.display = 'block';
        document.getElementById("Q8W2S5").style.display = 'block';
        document.getElementById("Q8W2S8").style.display = 'block';
        document.getElementById("Q8W2S10").style.display = 'block';
        document.getElementById("Q8W2S13").style.display = 'block';
        document.getElementById("Q8W2S61").style.display = 'block';
        document.getElementById("file").style.display = 'block';

        document.getElementById("Q8W2S6").style.display = 'none';
        $('#Q5W3').prop('checked',true);

    }
    if(type == 2)
    {
        if($('#Q5W3').is(":checked"))
        {
            if (confirm("You have selected Rain Water In Q2.") == true)
            {

                $('#Q8W2_1').prop('checked',true);

                document.getElementById("Q8W2S1").style.display = 'block';
                document.getElementById("Q8W2S2").style.display = 'block';
                document.getElementById("Q8W2S3").style.display = 'block';
                document.getElementById("Q8W2S4").style.display = 'block';
                document.getElementById("Q8W2S5").style.display = 'block';
                document.getElementById("Q8W2S8").style.display = 'block';
                document.getElementById("Q8W2S10").style.display = 'block';
                document.getElementById("Q8W2S13").style.display = 'block';
                document.getElementById("Q8W2S61").style.display = 'block';
                document.getElementById("file").style.display = 'block';

                document.getElementById("Q8W2S6").style.display = 'none';
                WaterCatchment(2);
                RainEfficiency(2);
                WaterDecrease(0);
                Catchment(2);
                RainwaterHarvest(2);
                Storage(2);
                Recharge(2);


            }
            else
            {
                $('#Q5W3').focus();
                $('#Q8W2_2').removeAttr('checked');
                $('#Q8W2_1').removeAttr('checked');
                document.getElementById("Q8W2S1").style.display = 'none';
                document.getElementById("Q8W2S2").style.display = 'none';
                document.getElementById("Q8W2S3").style.display = 'none';
                document.getElementById("Q8W2S4").style.display = 'none';
                document.getElementById("Q8W2S5").style.display = 'none';
                document.getElementById("Q8W2S61").style.display = 'none';
                document.getElementById("Q8W2S8").style.display = 'none';
                document.getElementById("Q8W2S10").style.display = 'none';
                document.getElementById("Q8W2S13").style.display = 'none';
                document.getElementById("file").style.display = 'none';
                document.getElementById("Q8W2S6").style.display = 'none';
                WaterCatchment(2);
                RainEfficiency(2);
                WaterDecrease(0);
                Catchment(2);
                RainwaterHarvest(2);
                Storage(2);
                Recharge(2);


            }
        }
        else
        {
            document.getElementById("Q8W2S1").style.display = 'none';
            document.getElementById("Q8W2S2").style.display = 'none';
            document.getElementById("Q8W2S3").style.display = 'none';
            document.getElementById("Q8W2S4").style.display = 'none';
            document.getElementById("Q8W2S5").style.display = 'none';
            document.getElementById("Q8W2S61").style.display = 'none';
            document.getElementById("Q8W2S8").style.display = 'none';
            document.getElementById("Q8W2S10").style.display = 'none';
            document.getElementById("Q8W2S13").style.display = 'none';
            document.getElementById("file").style.display = 'none';

            document.getElementById("Q8W2S6").style.display = 'block';

            WaterCatchment(2);
            RainEfficiency(2);
            WaterDecrease(0);
            Catchment(2);
            RainwaterHarvest(2);
            Storage(2);
            Recharge(2);

        }



    }
}
function Toilets()
{

    var Girls = document.getElementById("Q13W1S1");
    var Boys = document.getElementById("Q13W1S2");
    var Common = document.getElementById("Q13W1S3");

    GirlsVal = Girls.value;
    GirlsPlace = Girls.placeholder;

    BoysVal = Boys.value;
    BoysPlace = Boys.placeholder;

    CommonVal = Common.value;
    CommonPlace = Common.placeholder;

    GirlsVal = parseFloat(GirlsVal);
    BoysVal = parseFloat(BoysVal);
    CommonVal = parseFloat(CommonVal);

    GirlsPlace = parseFloat(GirlsPlace);
    BoysPlace = parseFloat(BoysPlace);
    CommonPlace = parseFloat(CommonPlace);


    if(isNaN(GirlsVal))
        if(isNaN(GirlsPlace))
            GirlsVal = 0;
        else
            GirlsVal = GirlsPlace;

    if(isNaN(BoysVal))
        if(isNaN(BoysPlace))
            BoysVal = 0;
        else
            BoysVal = BoysPlace;

    if(isNaN(CommonVal))
        if(isNaN(CommonPlace))
            CommonVal = 0;
        else
            CommonVal = CommonPlace;
	
    $("#Q13W1S4").val(GirlsVal+BoysVal+CommonVal);

}

function ToiletCleaned(type)
{
    if(type == 1)
    {
        document.getElementById("Q18W2").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q18W2").style.display = 'none';

    }
}

function WasteWater(type)
{

    if(type == 1)
    {
        document.getElementById("Q20W1Q").style.display = 'block';
        document.getElementById("Q19W2").style.display = 'none';

    }
    if(type == 2)
    {
        document.getElementById("Q20W1Q").style.display = 'none';
        document.getElementById("Q19W2").style.display = 'block';

    }
}

function WasteSegregate(type)
{
    if(type == 1)
    {
        document.getElementById("Q1A").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q1A").style.display = 'none';

    }

}

function computeeSegregate()
{
    var sumHor = 0;
    var sumVert1 = 0;
    var sumVert2 = 0;
    var sumVert3 = 0;
    var sumVert4 = 0;
    var sumVert5 = 0;
    var sumVert6 = 0;

    for(i=1 ;i<=10; i++)
    {
        var id1 = "Q5WazS1".replace("z",i);
        var id2 = "Q5WazS2".replace("z",i);
        var id3 = "Q5WazS3".replace("z",i);
        var id4 = "Q5WazS4".replace("z",i);
        var id5 = "Q5WazS5".replace("z",i);
        var id6 = "Q5WazS6".replace("z",i);

        var element101 = document.getElementById(id1);
        var element201 = document.getElementById(id2);
        var element301 = document.getElementById(id3);
        var element401 = document.getElementById(id4);
        var element501 = document.getElementById(id6);

        var element1 = parseFloat(element101.value);
        var element11 = parseFloat(element101.placeholder);

        var element2 = parseFloat(element201.value);
        var element21 = parseFloat(element201.placeholder);

        var element3 = parseFloat(element301.value);
        var element31 = parseFloat(element301.placeholder);

        var element4 = parseFloat(element401.value);
        var element41 = parseFloat(element401.placeholder);

        var element5 = parseFloat(element501.value);
        var element51 = parseFloat(element501.placeholder);

        if(isNaN(element1))
            if(isNaN(element11))
                element1 = 0;
            else
                element1 = element11;

        if(isNaN(element2))
            if(isNaN(element21))
                element2 = 0;
            else
                element2 = element21;

        if(isNaN(element3))
            if(isNaN(element31))
                element3 = 0;
            else
                element3 = element31;

        if(isNaN(element4))
            if(isNaN(element41))
                element4 = 0;
            else
                element4 = element41;

            if(isNaN(element5))
            if(isNaN(element51))
                element5 = 0;
            else
                element5 = element51;

        sumHor = element1 + element2 + element3 + element4 + element5;
        console.log();
        $('#'+id5).val(sumHor);
        sumVert1 += element1;
        sumVert2 += element2;
        sumVert3 += element3;
        sumVert4 += element4;
        sumVert6 += element5;
        sumVert5 += sumHor;
        
        sumHor = 0;
        element1 = 0;
        element2 = 0;
        element3 = 0;
        element4 = 0;
        element5 = 0;
    }

    $("#Q5Wa11S1").val(sumVert1);
    $("#Q5Wa11S2").val(sumVert2);
    $("#Q5Wa11S3").val(sumVert3);
    $("#Q5Wa11S4").val(sumVert4);
    $("#Q5Wa11S5").val(sumVert5);
    $("#Q5Wa11S6").val(sumVert6);
    

    sumVert1 = 0;
    sumVert2 = 0;
    sumVert3 = 0;
    sumVert4 = 0;
    sumVert5 = 0;
    sumVert6 = 0;


}




function solidWaste()
{
    var sumHor = 0;

    var id1 = "Q6Wa1S1";
    var id2 = "Q6Wa1S2";
    var id3 = "Q6Wa1S3";
    var id4 = "Q6Wa1S4";
    var id5 = "Q6Wa1S5";

    var element1 = document.getElementById(id1);
    var element2 = document.getElementById(id2);
    var element3 = document.getElementById(id3);
    var element4 = document.getElementById(id4);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    element2 = parseFloat(element2.value);
    var element21 = parseFloat(element2.placeholder);

    element3 = parseFloat(element3.value);
    var element31 = parseFloat(element3.placeholder);

    element4 = parseFloat(element4.value);
    var element41 = parseFloat(element4.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    if(isNaN(element2))
        if(isNaN(element21))
            element2 = 0;
        else
            element2 = element21;

    if(isNaN(element3))
        if(isNaN(element31))
            element3 = 0;
        else
            element3 = element31;

    if(isNaN(element4))
        if(isNaN(element41))
            element4 = 0;
        else
            element4 = element41;

    sumHor = element1 + element2 + element3 + element4;
    $('#'+id5).val(sumHor);
    var population = parseFloat($('#Q4G4S3').val());

    $('#Q6Wa1S6').val(((sumHor/30)/population).toFixed(2))
    sumHor = 0;

}
function solidWaste1()
{
    var sumHor = 0;

    var id1 = "Q8Wa1S1";
    var id2 = "Q8Wa1S2";
    var id3 = "Q8Wa1S3";
    var id4 = "Q8Wa1S4";
    var id5 = "Q8Wa1S5";

    var element1 = document.getElementById(id1);
    var element2 = document.getElementById(id2);
    var element3 = document.getElementById(id3);
    var element4 = document.getElementById(id4);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    element2 = parseFloat(element2.value);
    var element21 = parseFloat(element2.placeholder);

    element3 = parseFloat(element3.value);
    var element31 = parseFloat(element3.placeholder);

    element4 = parseFloat(element4.value);
    var element41 = parseFloat(element4.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    if(isNaN(element2))
        if(isNaN(element21))
            element2 = 0;
        else
            element2 = element21;

    if(isNaN(element3))
        if(isNaN(element31))
            element3 = 0;
        else
            element3 = element31;

    if(isNaN(element4))
        if(isNaN(element41))
            element4 = 0;
        else
            element4 = element41;

    sumHor = element1 + element2 + element3 + element4;
    $('#'+id5).val(sumHor);
    var population = parseFloat($('#Q4G4S3').val());

    $('#Q8Wa1S6').val(((sumHor/30)/population).toFixed(2))
    sumHor = 0;

}


function solidRecyclable()
{
    var sumHor = 0;
    var sumVert1 = 0;
    var sumVert2 = 0;
    var sumVert3 = 0;
    var sumVert4 = 0;
    var sumVert5 = 0;

    var id1 = "Q6Wa2S1";
    var id2 = "Q6Wa2S2";
    var id3 = "Q6Wa2S3";
    var id4 = "Q6Wa2S4";
    var id5 = "Q6Wa2S5";
    var id6 = "Q6Wa2S6";
    var id7 = "Q6Wa2S7";
    var id8 = "Q6Wa2S8";
    var id9 = "Q6Wa2S9";

    var element1 = document.getElementById(id1);
    var element2 = document.getElementById(id2);
    var element3 = document.getElementById(id3);
    var element4 = document.getElementById(id4);
    var element5 = document.getElementById(id5);
    var element6 = document.getElementById(id6);
    var element7 = document.getElementById(id7);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    element2 = parseFloat(element2.value);
    var element21 = parseFloat(element2.placeholder);

    element3 = parseFloat(element3.value);
    var element31 = parseFloat(element3.placeholder);

    element4 = parseFloat(element4.value);
    var element41 = parseFloat(element4.placeholder);

    element5 = parseFloat(element5.value);
    var element51 = parseFloat(element5.placeholder);

    element6 = parseFloat(element6.value);
    var element61 = parseFloat(element6.placeholder);

    element7 = parseFloat(element7.value);
    var element71 = parseFloat(element7.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    if(isNaN(element2))
        if(isNaN(element21))
            element2 = 0;
        else
            element2 = element21;

    if(isNaN(element3))
        if(isNaN(element31))
            element3 = 0;
        else
            element3 = element31;

    if(isNaN(element4))
        if(isNaN(element41))
            element4 = 0;
        else
            element4 = element41;

    if(isNaN(element5))
        if(isNaN(element51))
            element5 = 0;
        else
            element5 = element51;

    if(isNaN(element6))
        if(isNaN(element61))
            element6 = 0;
        else
            element6 = element61;

    if(isNaN(element7))
        if(isNaN(element71))
            element7 = 0;
        else
            element7 = element71;


    sumHor = element1 + element2 + element3 + element4+ element5+ element6+ element7;
    $('#'+id8).val(sumHor);
    var population = parseFloat($('#Q4G4S3').val());

    $('#Q6Wa2S9').val(((sumHor/30)/population).toFixed(2))

    sumHor = 0;


}
function solidRecyclable1()
{
    var sumHor = 0;
    var sumVert1 = 0;
    var sumVert2 = 0;
    var sumVert3 = 0;
    var sumVert4 = 0;
    var sumVert5 = 0;

    var id1 = "Q8Wa2S1";
    var id2 = "Q8Wa2S2";
    var id3 = "Q8Wa2S3";
    var id4 = "Q8Wa2S4";
    var id5 = "Q8Wa2S5";
    var id6 = "Q8Wa2S6";
    var id7 = "Q8Wa2S7";
    var id8 = "Q8Wa2S8";
    var id9 = "Q8Wa2S9";

    var element1 = document.getElementById(id1);
    var element2 = document.getElementById(id2);
    var element3 = document.getElementById(id3);
    var element4 = document.getElementById(id4);
    var element5 = document.getElementById(id5);
    var element6 = document.getElementById(id6);
    var element7 = document.getElementById(id7);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    element2 = parseFloat(element2.value);
    var element21 = parseFloat(element2.placeholder);

    element3 = parseFloat(element3.value);
    var element31 = parseFloat(element3.placeholder);

    element4 = parseFloat(element4.value);
    var element41 = parseFloat(element4.placeholder);

    element5 = parseFloat(element5.value);
    var element51 = parseFloat(element5.placeholder);

    element6 = parseFloat(element6.value);
    var element61 = parseFloat(element6.placeholder);

    element7 = parseFloat(element7.value);
    var element71 = parseFloat(element7.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    if(isNaN(element2))
        if(isNaN(element21))
            element2 = 0;
        else
            element2 = element21;

    if(isNaN(element3))
        if(isNaN(element31))
            element3 = 0;
        else
            element3 = element31;

    if(isNaN(element4))
        if(isNaN(element41))
            element4 = 0;
        else
            element4 = element41;

    if(isNaN(element5))
        if(isNaN(element51))
            element5 = 0;
        else
            element5 = element51;

    if(isNaN(element6))
        if(isNaN(element61))
            element6 = 0;
        else
            element6 = element61;

    if(isNaN(element7))
        if(isNaN(element71))
            element7 = 0;
        else
            element7 = element71;


    sumHor = element1 + element2 + element3 + element4+ element5+ element6+ element7;
    $('#'+id8).val(sumHor);
    var population = parseFloat($('#Q4G4S3').val());

    $('#Q8Wa2S9').val(((sumHor/30)/population).toFixed(2))

    sumHor = 0;


}
function EWaste()
{
    var id1 = "Q6Wa4S1";
    var element1 = document.getElementById(id1);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    var population = parseFloat($('#Q4G4S3').val());

    $('#Q6Wa4S2').val(((element1/30)/population).toFixed(2))


}

function EWaste1()
{
    var id1 = "Q8Wa4S1";
    var element1 = document.getElementById(id1);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    var population = parseFloat($('#Q4G4S3').val());

    $('#Q8Wa4S2').val(((element1/30)/population).toFixed(2))


}

function WasteBiomedical()
{
    var id1 = "Q6Wa5S1";
    var element1 = document.getElementById(id1);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    var population = parseFloat($('#Q4G4S3').val());

    $('#Q6Wa5S2').val(((element1/30)/population).toFixed(2))

}
function WasteBiomedical1()
{
    var id1 = "Q8Wa5S1";
    var element1 = document.getElementById(id1);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    var population = parseFloat($('#Q4G4S3').val());

    $('#Q8Wa5S2').val(((element1/30)/population).toFixed(2))

}

function WasteSanitary()
{
    var id1 = "Q6Wa6S1";
    var element1 = document.getElementById(id1);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    var population = parseFloat($('#Q4G4S3').val());

    $('#Q6Wa6S2').val(((element1/30)/population).toFixed(2))
}
function WasteSanitary1()
{
    var id1 = "Q8Wa6S1";
    var element1 = document.getElementById(id1);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    var population = parseFloat($('#Q4G4S3').val());

    $('#Q8Wa6S2').val(((element1/30)/population).toFixed(2))
}
function WasteConstruction()
{
    var id1 = "Q6Wa7S1";
    var element1 = document.getElementById(id1);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    var population = parseFloat($('#Q4G4S3').val());

    $('#Q6Wa7S2').val(((element1/30)/population).toFixed(2))
}
function WasteConstruction1()
{
    var id1 = "Q8Wa7S1";
    var element1 = document.getElementById(id1);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    var population = parseFloat($('#Q4G4S3').val());

    $('#Q8Wa7S2').val(((element1/30)/population).toFixed(2));
}
function WasteDomestic ()
{
    var sumHor = 0;
    var sumVert1 = 0;
    var sumVert2 = 0;
    var sumVert3 = 0;
    var sumVert4 = 0;
    var sumVert5 = 0;

    var id1 = "Q6Wa3S1";
    var id2 = "Q6Wa3S2";
    var id3 = "Q6Wa3S3";
    var id4 = "Q6Wa3S4";

    var element1 = document.getElementById(id1);
    var element2 = document.getElementById(id2);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    element2 = parseFloat(element2.value);
    var element21 = parseFloat(element2.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    if(isNaN(element2))
        if(isNaN(element21))
            element2 = 0;
        else
            element2 = element21;

    sumHor = element1 + element2;
    $('#'+id3).val(sumHor);
    var population = parseFloat($('#Q4G4S3').val());

    $('#Q6Wa3S4').val(((sumHor/30)/population).toFixed(2))

    sumHor = 0;


}
function WasteDomestic1 ()
{
    var sumHor = 0;
    var sumVert1 = 0;
    var sumVert2 = 0;
    var sumVert3 = 0;
    var sumVert4 = 0;
    var sumVert5 = 0;

    var id1 = "Q8Wa3S1";
    var id2 = "Q8Wa3S2";
    var id3 = "Q8Wa3S3";
    var id4 = "Q8Wa3S4";

    var element1 = document.getElementById(id1);
    var element2 = document.getElementById(id2);

    element1 = parseFloat(element1.value);
    var element11 = parseFloat(element1.placeholder);

    element2 = parseFloat(element2.value);
    var element21 = parseFloat(element2.placeholder);

    if(isNaN(element1))
        if(isNaN(element11))
            element1 = 0;
        else
            element1 = element11;

    if(isNaN(element2))
        if(isNaN(element21))
            element2 = 0;
        else
            element2 = element21;

    sumHor = element1 + element2;
    $('#'+id3).val(sumHor);
    var population = parseFloat($('#Q4G4S3').val());

    $('#Q8Wa3S4').val((sumHor/population).toFixed(2))

    sumHor = 0;


}

function WasteQuantity ()
{
    var sumHor = 0;
    var sumVert1 = 0;
    var sumVert2 = 0;
    var sumVert3 = 0;
    var sumVert4 = 0;
    var sumVert5 = 0;

    var id1 = "Q8Wa2S1";
    var id2 = "Q8Wa2S2";
    var id3 = "Q8Wa2S3";
    var id4 = "Q8Wa2S4";
    var id5 = "Q8Wa2S5";
    var id6 = "Q8Wa2S6";
    var id7 = "Q8Wa2S7";
    var id8 = "Q8Wa2S8";
    var id9 = "Q8Wa2S9";
    var id10 = "Q8Wa2S10";
    var id11 = "Q8Wa2S11";
    var id12 = "Q8Wa2S12";
    var id13 = "Q8Wa2S13";

    var element1 = document.getElementById(id1);
    var element2 = document.getElementById(id2);
    var element3 = document.getElementById(id3);
    var element4 = document.getElementById(id4);
    var element5 = document.getElementById(id5);
    var element6 = document.getElementById(id6);
    var element7 = document.getElementById(id7);
    var element8 = document.getElementById(id8);
    var element9 = document.getElementById(id9);
    var element10 = document.getElementById(id10);
    var element11 = document.getElementById(id11);
    var element12 = document.getElementById(id12);

    element1 = parseFloat(element1.value);
    var element101 = parseFloat(element1.placeholder);

    element2 = parseFloat(element2.value);
    var element21 = parseFloat(element2.placeholder);

    element3 = parseFloat(element3.value);
    var element31 = parseFloat(element3.placeholder);

    element4 = parseFloat(element4.value);
    var element41 = parseFloat(element4.placeholder);

    element5 = parseFloat(element5.value);
    var element51 = parseFloat(element5.placeholder);

    element6 = parseFloat(element6.value);
    var element61 = parseFloat(element6.placeholder);

    element7 = parseFloat(element7.value);
    var element71 = parseFloat(element7.placeholder);

    element8 = parseFloat(element8.value);
    var element81 = parseFloat(element8.placeholder);

    element9 = parseFloat(element9.value);
    var element91 = parseFloat(element9.placeholder);

    element10 = parseFloat(element10.value);
    var element1001 = parseFloat(element10.placeholder);

    element11 = parseFloat(element11.value);
    var element1101 = parseFloat(element11.placeholder);

    element12 = parseFloat(element12.value);
    var element1201 = parseFloat(element12.placeholder);

    if(isNaN(element1))
        if(isNaN(element101))
            element1 = 0;
        else
            element1 = element101;

    if(isNaN(element2))
        if(isNaN(element21))
            element2 = 0;
        else
            element2 = element21;

    if(isNaN(element3))
        if(isNaN(element31))
            element3 = 0;
        else
            element3 = element31;

    if(isNaN(element4))
        if(isNaN(element41))
            element4 = 0;
        else
            element4 = element41;

    if(isNaN(element5))
        if(isNaN(element51))
            element5 = 0;
        else
            element5 = element51;

    if(isNaN(element6))
        if(isNaN(element61))
            element6 = 0;
        else
            element6 = element61;

    if(isNaN(element7))
        if(isNaN(element71))
            element7 = 0;
        else
            element7 = element71;

    if(isNaN(element8))
        if(isNaN(element81))
            element8 = 0;
        else
            element8 = element81;

    if(isNaN(element9))
        if(isNaN(element91))
            element9 = 0;
        else
            element9 = element91;

    if(isNaN(element10))
        if(isNaN(element1001))
            element10 = 0;
        else
            element10 = element1001;

    if(isNaN(element11))
        if(isNaN(element1101))
            element11 = 0;
        else
            element11 = element1101;

    if(isNaN(element12))
        if(isNaN(element1201))
            element12 = 0;
        else
            element12 = element1201;


    sumHor = element1 + element2 + element3 + element4+ element5+ element6+ element7+ element8+ element9+ element10+ element11+ element12;
    $('#'+id13).val(sumHor);
    sumHor = 0;


}

function WasteGenerated(type)
{
    if(type == 1)
    {
        document.getElementById("Q8Wa2").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q8Wa2").style.display = 'none';

    }

}

function WasteFacility(type)
{
    if(type == 1)
    {
        document.getElementById("Q9Wa2").style.display = 'block';
        document.getElementById("Q9Wa3").style.display = 'block';
        document.getElementById("Q9Wa4").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q9Wa2").style.display = 'none';
        document.getElementById("Q9Wa3").style.display = 'none';
        document.getElementById("Q9Wa4").style.display = 'none';

    }

}

function computeRecycling()
{
    var sumHor = 0;
    var sumVert1 = 0;
    var sumVert2 = 0;
    var sumVert3 = 0;
    var sumVert4 = 0;
    var sumVert5 = 0;

    for(i=1 ;i<=8; i++)
    {
        var id1 = "Q11WazS1".replace("z",i);
        var id2 = "Q11WazS2".replace("z",i);
        var id3 = "Q11WazS3".replace("z",i);
        var id4 = "Q11WazS4".replace("z",i);

        var element1 = document.getElementById(id1);
        var element2 = document.getElementById(id2);
        var element3 = document.getElementById(id3);
        var element4 = document.getElementById(id4);

        element1 = parseFloat(element1.value);
        var element11 = parseFloat(element1.placeholder);

        element2 = parseFloat(element2.value);
        var element21 = parseFloat(element2.placeholder);

        element3 = parseFloat(element3.value);
        var element31 = parseFloat(element3.placeholder);

        element4 = parseFloat(element4.value);
        var element41 = parseFloat(element4.placeholder);

        if(isNaN(element1))
            if(isNaN(element11))
                element1 = 0;
            else
                element1 = element11;

        if(isNaN(element2))
            if(isNaN(element21))
                element2 = 0;
            else
                element2 = element21;

        if(isNaN(element3))
            if(isNaN(element31))
                element3 = 0;
            else
                element3 = element31;

        if(isNaN(element4))
            if(isNaN(element41))
                element4 = 0;
            else
                element4 = element41;

        sumVert1 += element1;
        sumVert2 += element2;
        sumVert3 += element3;
        sumVert4 += element4;


    }

    $("#Q11Wa9S1").val(sumVert1);
    $("#Q11Wa9S2").val(sumVert2);
    $("#Q11Wa9S3").val(sumVert3);
    $("#Q11Wa9S4").val(sumVert4);

    sumVert1 = 0;
    sumVert2 = 0;
    sumVert3 = 0;
    sumVert4 = 0;


}
function computeItems()
{
    var sumHor = 0;
    var sumVert1 = 0;
    var sumVert2 = 0;
    var sumVert3 = 0;
    var sumVert4 = 0;
    var sumVert5 = 0;

    for(i=1 ;i<=28; i++)
    {
        var id1 = "Q12WazS1".replace("z",i);
        var id2 = "Q12WazS2".replace("z",i);
        var id3 = "Q12WazS3".replace("z",i);
        var id4 = "Q12WazS4".replace("z",i);

        var element1 = document.getElementById(id1);
        var element2 = document.getElementById(id2);
        var element3 = document.getElementById(id3);
        var element4 = document.getElementById(id4);

        element1 = parseFloat(element1.value);
        var element11 = parseFloat(element1.placeholder);

        element2 = parseFloat(element2.value);
        var element21 = parseFloat(element2.placeholder);

        element3 = parseFloat(element3.value);
        var element31 = parseFloat(element3.placeholder);

        element4 = parseFloat(element4.value);
        var element41 = parseFloat(element4.placeholder);

        if(isNaN(element1))
            if(isNaN(element11))
                element1 = 0;
            else
                element1 = element11;

        if(isNaN(element2))
            if(isNaN(element21))
                element2 = 0;
            else
                element2 = element21;

        if(isNaN(element3))
            if(isNaN(element31))
                element3 = 0;
            else
                element3 = element31;

        $("#"+id4).val( element2 + element3);

    }



}
function WasteDealer(type)
{
    if(type == 1)
    {
        document.getElementById("Q13Wa21").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q13Wa21").style.display = 'none';

    }

}
function WasteBurn(type)
{
    if(type == 1)
    {
        document.getElementById("Q15Wa2").style.display = 'block';
        document.getElementById("Q15Wa3").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("Q15Wa2").style.display = 'none';
        document.getElementById("Q15Wa3").style.display = 'none';

    }

}
function WastePolicy(type)
{
    if(type == 1)
    {
        document.getElementById("WastePolicy").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("WastePolicy").style.display = 'none';

    }

}
function WasteAwareness(type)
{
    if(type == 1)
    {
        document.getElementById("awareness").style.display = 'block';
        document.getElementById("Q18Wa3").style.display = 'block';

    }
    if(type == 2)
    {
        document.getElementById("awareness").style.display = 'none';
        document.getElementById("Q18Wa3").style.display = 'none';

    }

}
function WaterDecrease(type)
{
    if(type == 1)
    {
        document.getElementById("Q8W2S11").style.display = 'block';
        document.getElementById("Q8W2S12").style.display = 'none';

    }
    else if(type == 2)
    {
        document.getElementById("Q8W2S12").style.display = 'block';
        document.getElementById("Q8W2S11").style.display = 'none';

    }
    else
    {
        document.getElementById("Q8W2S11").style.display = 'none';
        document.getElementById("Q8W2S12").style.display = 'none';

    }
}
function RainEfficiency(type)
{
    if(type == 1)
    {
        document.getElementById("Q8W2S9").style.display = 'block';

    }
    else if(type == 2)
    {
        document.getElementById("Q8W2S9").style.display = 'none';

    }
}
function WaterCatchment(type)
{
    if(type == 1)
    {
        document.getElementById("Q8W2S7").style.display = 'block';

    }
    else if(type == 2)
    {
        document.getElementById("Q8W2S7").style.display = 'none';

    }
}

function AirCrossLink1(type)
{
    var val = $('#Q6A1Val').val();
    val = parseFloat(val);
    if(val > 2 && type == 2)
    {

        if (confirm("In Air section (Q3) you have indicated school owns vehicles, hence response to Q2 must be 'Yes'") == true)
        {
            $('#Q5E1').prop('checked',true);
        }
        else
        {
            $('#Q5E1').prop('checked',true);
        }

    }


}

function ComputeCrossLinkEnergy(type,value)
{
    value = parseFloat(value);
    if(value > 0)
    {
        if(type == 'Wind')
        {
            $('#Wind').prop('checked',true);
            var val1 = (value * 3.6).toFixed(2);
            $('#Q6E10S2').val(val1);

        }
        else if(type == 'Solar')
        {
            $('#Solar').prop('checked',true);
		$('.section_A').css('display', 'block')
            var val1 = (value * 3.6).toFixed(2);
            $('#Q6E9S2').val(val1);
        }
        $('#Q9E1').prop('checked',true);
        $('#alternativeEnergy').css('display','block');
        AlternativeSource(1);
        computeJoules();
    }
    else
    {
        if(type == 'Wind')
        {
            $('#Wind').prop('checked',false);
            $('#Q6E10S2').val(0);
        }
        else if(type == 'Solar')
        {
            $('#Solar').prop('checked',false);
            $('#Q6E9S2').val(0);
        }
        $('#Q9E1').prop('checked',false);
        $('#alternativeEnergy').css('display','none');
	    $('.section_A').css('display', 'none');
        AlternativeSource(2);

    }



}

function FoodQ4F1(type)
{
    if(type == 1)
    {
        $('#Q6F1').css('display','block');
        $('#Q7F1').css('display','block');
        $('#Q8F1').css('display','block');
        $('#Q7F1_2').prop('checked',true);
        $('#Q8F1_2').prop('checked',true);

        id=""

    }
    else if(type == 2)
    {
        var type = $("#Q1S1").val();
        if(type >= 3)
        {
            var x = $('#Q4F1_2').is(":checked");
            if(x == true)
            {
                if (confirm("Your school has opted for residential category in School Profile section. Are you sure you want to answer “No” to Q1 Food section?") == true)
                {
                    $('#Q4F1_2').prop('checked',true);
                    $('#Q6F1').css('display','none');
                    $('#Q7F1').css('display','none');
                    $('#Q8F1').css('display','none');
                    $('#Q7F1_2').prop('checked',true);
                    $('#Q8F1_2').prop('checked',true);
                    ComputeTraditionalFood(2);
                    ComputeBeverages(2);

                }
                else
                {
                    $('#Q4F1_1').prop('checked',true);
                }
            }

        }
        else
        {
            $('#Q4F1_2').prop('checked',true);
            $('#Q6F1').css('display','none');
            $('#Q7F1').css('display','none');
            $('#Q8F1').css('display','none');
            $('#Q7F1_2').prop('checked',true);
            $('#Q8F1_2').prop('checked',true);
            ComputeTraditionalFood(2);
            ComputeBeverages(2);
        }

    }
}
function Measure(type)
{
    if(type == 1)
    {
        document.getElementById("Q12F2").style.display = 'block';

    }
    else if(type == 2)
    {
        document.getElementById("Q12F2").style.display = 'none';

    }
}
function ExtraCurricular(type)
{
    if(type == 1)
    {
        document.getElementById("Q13F2").style.display = 'block';

    }
    else if(type == 2)
    {
        document.getElementById("Q13F2").style.display = 'none';

    }
}

function BuildUpArea()
{

    var Sum = 0;Q4L8
    for(i=2;i<9;i++)
    {
        if(i == 3 || i == 4)
        {
            continue;
        }
        else
        {
            id = "Q4Lz".replace('z',i);
            var a = document.getElementById(''+id);
            console.log(id);

            a1 = parseFloat(a.value);
            a11 = parseFloat(a.placeholder);

            if(isNaN(a1))
                if(isNaN(a11))
                    a1 = 0;
                else
                    a1 = a11;
            Sum+=a1;
        }

    }

    $('#Q4L1').val(Sum);

}

function GreenArea()
{
    var a = document.getElementById('Q4L3');
    var b = document.getElementById('Q4L4');

    a1 = parseFloat(a.value);
    a11 = parseFloat(a.placeholder);

    b1 = parseFloat(b.value);
    b11 =parseFloat (b.placeholder);


    if(isNaN(a1))
        if(isNaN(a11))
            a1 = 0;
        else
            a1 = a11;

    if(isNaN(b1))
        if(isNaN(b11))
            b1 = 0;
        else
            b1 = b11;

    $('#Q4L5').val(a1+b1);

    BuildUpArea();

}

function WaterConsumption()
{
    var sum = 0;
    for(i=1;i<11;i++)
    {
        var id="Q4Wz".replace("z",i);
        console.log(id);
        var val = document.getElementById(id);

        var val1 = parseFloat(val.value);
        var val2 = parseFloat(val.placeholder);

        if(isNaN(val1))
            if(isNaN(val2))
                val1 = 0;
            else
                val1 = val2

        sum += val1;


    }
    $('#Q4W11').val(sum);
    sum = 0;


}

function Catchment(type)
{
    if(type == 1)
    {
        document.getElementById("Q8W2S1S1").style.display = 'block';

    }
    else if(type == 2)
    {
        document.getElementById("Q8W2S1S1").style.display = 'none';

    }
}

function RainwaterHarvest(type)
{
    if(type == 1)
    {
        document.getElementById("Q8W2S2S1").style.display = 'block';
        document.getElementById("Q8W2S2S2").style.display = 'block';
	    $('#Q8W2S2S2_2').prop("checked",false);
            $('#Q8W2S2S2_1').prop("checked",true);
        document.getElementById("Q8W2S27").style.display = 'block';
        document.getElementById("Q8W2S2S10").style.display = 'block';
    }
    else if(type == 2)
    {
        document.getElementById("Q8W2S2S1").style.display = 'none';
        document.getElementById("Q8W2S2S2").style.display = 'none';
        Storage(2);
         $('#Q8W2S2S2_2').prop("checked",true);
         $('#Q8W2S2S2_1').prop("checked",false);
        document.getElementById("Q8W2S27").style.display = 'none';
        Recharge(2);
        document.getElementById("Q8W2S2S10").style.display = 'none';
    }
}

function Storage(type)
{
    if(type == 1)
    {
        document.getElementById("Q8W2S2S3").style.display = 'block';
        document.getElementById("Q8W2S2S4").style.display = 'block';
        document.getElementById("Q8W2S2S5").style.display = 'block';
        document.getElementById("Q8W2S2S6").style.display = 'block';

    }
    else if(type == 2)
    {
        document.getElementById("Q8W2S2S3").style.display = 'none';
        document.getElementById("Q8W2S2S4").style.display = 'none';
        document.getElementById("Q8W2S2S5").style.display = 'none';
        document.getElementById("Q8W2S2S6").style.display = 'none';

    }
}

function Recharge(type)
{
    if(type == 1)
    {
        document.getElementById("Q8W2S2S8").style.display = 'block';
        document.getElementById("Q8W2S2S9").style.display = 'block';

    }
    else if(type == 2)
    {
        document.getElementById("Q8W2S2S8").style.display = 'none';
        document.getElementById("Q8W2S2S9").style.display = 'none';
    }
}
function HarvestingStructure()
{
    var div = document.getElementById('Q8W2S4S1');
    div.style.display = div.style.display == "none" ? "block" : "none";
    var div1 = document.getElementById('Q8W2S4S2');
    div1.style.display = div1.style.display == "none" ? "block" : "none";
}


function Megajoules(value)
{
    var val = parseFloat(value);
    var val1 = (value * 3.6).toFixed(2);
    $('#Q6E1S2').val(val1);
    computeJoules();
}
function MegajoulesCoal(value)
{
    var val = parseFloat(value);
    var val1 = (value * 20.92).toFixed(2);
    $('#Q6E7S2').val(val1);

    computeJoules();

}
function MegajoulesDiesel(value,id)
{
    var val = parseFloat(value);
    var val1 = (value * 44.80).toFixed(2);
    $('#'+id).val(val1);
    computeJoules();
}
function MegajoulesBiomas(value,id)
{
    var val = parseFloat(value);
    var val1 = (value * 13.77).toFixed(2);
    $('#'+id).val(val1);
    computeJoules();
}
function MegajoulesPetrol(value,id)
{
    var val = parseFloat(value);
    var val1 = (value * 43.93).toFixed(2);
    $('#'+id).val(val1);
    computeJoules();
}
function MegajoulesCNG(value,id)
{
    var val = parseFloat(value);
    var val1 = (value * 37.24).toFixed(2);

    $('#'+id).val(val1);

    computeJoules();
}
function MegajoulesKerosene(value,id)
{
    var val = parseFloat(value);
    var val1 = (value * 43.09).toFixed(2);

    $('#'+id).val(val1);

    computeJoules();
}
function MegajoulesLPG(value,id)
{
    var val = parseFloat(value);
    var val1 = (value * 45.19).toFixed(2);

    $('#'+id).val(val1);


    computeJoules();
}
function MegajoulesAnimal(value,id)
{
    var val = parseFloat(value);
    var val1 = (value * 13.77).toFixed(2);

    $('#'+id).val(val1);

    computeJoules();
}
function MegajoulesWood(value,id)
{
    var val = parseFloat(value);
    var val1 = (value * 13.28).toFixed(2);

    $('#'+id).val(val1);

    computeJoules();
}
function computeJoules()
{
    var total1 = 0;
    var total2 = 0;
    for (i=1;i<15;i++)
    {
        var id1 = "Q6EzS1".replace('z',i);
        var id2 = "Q6EzS2".replace('z',i);
        var element1 = parseFloat(document.getElementById(id1).value);
        var element2 = parseFloat(document.getElementById(id2).value);
        var element21 = parseFloat(document.getElementById(id2).placeholder);

        if(isNaN(element2))
            if(isNaN(element21))
                element2 = 0;
            else
                element2 = element21;

        console.log(id1,id2);

        total1 += element1;
        total2 += element2;

    }
    var id1 = "Q6E16S1";
    var id2 = "Q6E16S2";
    var element1 = parseFloat(document.getElementById(id1).value);
    var element2 = parseFloat(document.getElementById(id2).value);
    var element21 = parseFloat(document.getElementById(id2).placeholder);

    if(isNaN(element2))
        if(isNaN(element21))
            element2 = 0;
        else
            element2 = element21;

    console.log(id1,id2);

    total1 += element1;
    total2 += element2;

    console.log(total1,total2);

    $('#Q6E15S1').val(total1);
    $('#Q6E15S2').val(total2);

}
