/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This script handles all the import form submitted
 * CSV validation and
 * Data preview
 *
 *
 * jQuery version 3.x.x
 *
 */

// listner function
function import_init(input_id_str,key_type) {

    // Checks the browser support for FileReader object
    if (!window.File || !window.FileReader || !window.FileList || !window.Blob || !input_id_str) {
        alert('The File APIs are not fully supported in this browser.');
        return;
    }   

    input = document.getElementById(input_id_str);
    key_type = $('#'+key_type).val();
    //alert(key_type);
    if (!input) {
        alert("Couldn't find the fileinput element.");
    }
    else if (!input.files) {
        alert("This browser doesn't seem to support the `files` property of file inputs.");
    }
    else if (!input.files[0]) {
        alert("Please select a file before clicking 'Import'");               
    }
    else {
        $('#block_popup').css({ 'display': "block" }); // loading popup show
        file = input.files[0];
        fr = new FileReader();

        fr.onload = function(e) { //This is a callback function which doesn't call until below f.readAsText(file)
            
              var text = fr.result;
              var valid = receivedText(text,key_type);
               //alert(valid);
              var html = genTable(text,key_type);
              
              // sending data to handle popup
              importModelLoad(valid, html,key_type);

              $('#block_popup').css({ 'display': "none" }); //loading popup hide
        }

        receivedText;

        fr.readAsText(file); // above onload callback runs after this code.
    }
}

// function which validates data according to the column heads
function receivedText(text,key_type) {
    if(!key_type || !text)
        return false;
    
    var col_head_str = text.split('\n')[0];

    // csv submitted column head array
    var col_head_arr = col_head_str.split(",");
    // valid column head array
    var valid_col_head_arr = getColHeads(key_type);
    
    var is_same = (valid_col_head_arr.length == col_head_arr.length) && valid_col_head_arr.every(function(element, index) {
        //alert(typeof(col_head_arr[index])+"  |  "+typeof(element));
        return element === col_head_arr[index];
    
    });
    
    
    //alert(is_same);
    
    
    // this code tests whether all elements are equal with the correct header elements. true if the callback function returns a truthy value for every array element; otherwise, false.

    //alert(is_same);
    return is_same;

}

// passing an array of column head according to given key
function getColHeads(key_type) {
    //alert(key_type);
    if(!key_type)
        return false;

    switch(key_type){
        case 'users':
            return ['firstname','lastname','email','username','roles','phonenumber','address','postcode','contactnumber'];
            break;
        case 'classes':
            return ['classname'];
            break;
        case 'subjects':
            return ['subjectname'];
            break;
        case 'halls':
            return ['hallname'];
            break;
        case 'student_parent':
            return ['student_email','parent_email'];
            break;
        case 'class_student':
            return ['student_email','class_name'];
            break;
        case 'class_subs':
            return ['class_name','subject_name'];
            break;
        case 'class_teacher':
            return ['teacher_email','class_name'];
            break;
        case 'teacher_subjects':
            return ['teacher_email','subject_name'];
            break;
        default:
            return array();
    }
    
}

// initiate preview by sending data to modal
function genTable(string,key_type) {
    if(!string)
        return false;

    // get number of columns
    var cols = getColHeads(key_type);

    // start the table  
    var html = '<table class="table table-striped" id="csv_validate">';

    // split into lines
    var rows = string.split("\n");

    // parse lines
    var count = 0;
    rows.forEach( function getvalues(ourrow) {
        if(count == 0) //Header row found
        {
            // start a table header row
            html += "<thead>";
            html += "<tr>";

            // split line into columns
            var columns = ourrow.split(",");
           
            var i;
            for (i = 0; i < cols.length; ++i) { //loop through number of columns
                html += "<th>" + columns[i] + "</th>";
            }

            // close row
            html += "</tr>";        
            html += "</thead>";
            
            html += "<tbody>";

            count++;
            return true;
        }

        // start a table body row
        if(ourrow != ''){ // if not empty row found
            html += "<tr>";

                // split line into columns
                var columns = ourrow.split(",");

                var i;
                for (i = 0; i < cols.length; ++i) { //loop through number of columns
                    html += "<td>" + columns[i] + "</td>";
                }


            // close row
            html += "</tr>";        
        }

        count++;
    })

    html += "</tbody>";
    // close table
    html += "</table>";

    return html;
}