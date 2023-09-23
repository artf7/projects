let courses = [
    {
        id: 0,
        course: "",
        title: "",
        instructor: "",
        room: "",
        description: "",
        color: ""
    },
    {
        id: 1,
        course: "Lunch",
        title: "",
        instructor: "",
        room: "",
        description: "",
        color: "yellow"
    },
    {
        id: 2,
        course: "COMM 4700",
        title: "Proffesional Practices IV",
        instructor: "Mr. Potatohead",
        room: "MAR-Online",
        description: "",
        color: "lightblue"
    },
    {
        id: 3,
        course: "PROG 2700",
        title: "Client Side Programming",
        instructor: "Ms. Pacman",
        room: "COG-114",
        description: "",
        color: "green"
    }
]

let timeslotLut = {
    "1-1": 0,
    "1-2": 0,
    "1-3": 0,
    "1-4": 1,
    "1-5": 0,
    "1-6": 0,
    "1-7": 0,
    "1-8": 0,
    "1-9": 0,

    "2-1": 2,
    "2-2": 2,
    "2-3": 2,
    "2-4": 1,
    "2-5": 2,
    "2-6": 2,
    "2-7": 2,
    "2-8": 2,
    "2-9": 2,

    "3-1": 0,
    "3-2": 0,
    "3-3": 0,
    "3-4": 1,
    "3-5": 0,
    "3-6": 0,
    "3-7": 0,
    "3-8": 0,
    "3-9": 0,

    "4-1": 0,
    "4-2": 0,
    "4-3": 0,
    "4-4": 1,
    "4-5": 0,
    "4-6": 0,
    "4-7": 0,
    "4-8": 0,
    "4-9": 0,

    "5-1": 0,
    "5-2": 0,
    "5-3": 0,
    "5-4": 1,
    "5-5": 0,
    "5-6": 0,
    "5-7": 0,
    "5-8": 0,
    "5-9": 0
}

let currentCourseId = 0;
let currentCell = [0, 0];

/**********************************************
*              Dom Elements
**********************************************/
const sched = document.getElementById("sched");
const tds = document.querySelectorAll('#sched td');

// Modal & Form controls
const domModal = document.getElementById("editCourseModal");
const txtCourseName = document.getElementById("txtCourseName");
const txtCourseRoom = document.getElementById("txtCourseRoom");
const txtCourseInstructor = document.getElementById("txtCourseInstructor");
const btnSave = document.getElementById("btnSave");

const bsModal = new bootstrap.Modal(domModal);

function getCourse(courseId) {
    return courses.find(c => c.id === courseId);
}

// Populate Table
let populateTable = function () {

    tds.forEach(function (td) {
        let rowId = td.cellIndex;
        let colId = td.parentNode.rowIndex;
        let courseId = timeslotLut[rowId + "-" + colId];
        let course = getCourse(courseId);
        td.innerHTML = '<p class="course-name">' + course.course + '</p><p class="instructor">' + course.instructor + '</p><p class="room">' + course.room + '</p>';
        td.style.backgroundColor = course.color;
    });
}


let showEditModal = function (evt) {
    console.log(evt.target.tagName);
    let td;
    if (evt.target.tagName === "TD") {
        td = evt.target;
    } else if (evt.target.parentNode.tagName === "TD") {
        td = evt.target.parentNode; //evt.target = <p> so parentNode should be <td>
    }
    let rowId = td.cellIndex;
    let colId = td.parentNode.rowIndex;
    let courseId = timeslotLut[rowId + "-" + colId];
    let course = getCourse(courseId);
    txtCourseName.value = course.course;
    txtCourseRoom.value = course.room;
    txtCourseInstructor.value = course.instructor;

    currentCourseId = courseId;
    currentCell = [rowId, colId];
    bsModal.show();
}



function updateCourse(evt) {
    console.log("Save Button!");
    //update the courses obj
    if (currentCourseId === 0) {
        courses.push({
            id: courses.length,
            course: txtCourseName.value,
            title: "",
            instructor: txtCourseInstructor.value,
            room: txtCourseRoom.value,
            description: "",
            color: ""
        })
        currentCourseId = courses.length - 1;
        timeslotLut[currentCell[0] + "-" + currentCell[1]] = currentCourseId;
    } else {
        console.log(currentCell, currentCourseId);
        let course = getCourse(currentCourseId);
        course.course = txtCourseName.value;
        course.room = txtCourseRoom.value;
        course.instructor = txtCourseInstructor.value;
    }
    //update the table
    populateTable();
    //close the modal
    bsModal.hide();

}

/**********************************************
 *              Event Listeners
**********************************************/
tds.forEach(td => td.addEventListener("click", showEditModal));
btnSave.addEventListener("click", updateCourse);

// let btnEdit = document.getElementById("btnEdit");
// btnEdit.addEventListener("click",)



// const tds = document.querySelectorAll(".table-sched td");
// tds.forEach(td => td.addEventListener("click", function(evt) {
//     console.log("hi",evt);
// }));

populateTable();
const btnSecond = document.getElementById("second");
function radCoursesChoice() {
    // Declare i to set to each button unque id
    let i = 1;
    courses.forEach(function (course) {
      if (course.course != "" && course.course != "Lunch") {
        console.log(course.course);
        const divElement = document.createElement('div');
        divElement.className = 'form-check form-check-inline';
  
        // Create the input element with class 'form-check-input'
        const inputElement = document.createElement('input');
        inputElement.className = 'form-check-input';
        inputElement.type = 'radio';
        inputElement.name = 'inlineRadioOptions';
        inputElement.id = 'inlineRadio' + i;
        inputElement.value = 'option' + i;
  
        // Create the label element with class 'form-check-label' and for attribute
        const labelElement = document.createElement('label');
        labelElement.className = 'form-check-label';
        labelElement.htmlFor = 'inlineRadio-' + course.course;
        labelElement.id = 'button-' + course.course;
  
        // Add text in button
        labelElement.innerHTML = course.course;
  
        // Append the input element to the div element
        divElement.appendChild(inputElement);
  
        // Append the label element to the div element
        divElement.appendChild(labelElement);
  
        // Add the div element to the document body
        document.body.appendChild(divElement);
        // Add event listener to parent divElement
        divElement.addEventListener('click', function() {
        inputElement.checked = true;
        // Set the checked attribute to true for the clicked radio button
        console.log(course.course + " is checked!");
        // Declare checkedCourse as a course that was checked 
        let checkedCourse = course;
        // Click event for the edit button 
        btnSecond.addEventListener("click", function() {
        // Get course Name
        txtCourseName.value = checkedCourse.course;
        // Get course Room 
        txtCourseRoom.value = checkedCourse.room;
        // Het Instrucur name
        txtCourseInstructor.value = checkedCourse.instructor;
        bsModal.show();       
      });
    });
    i++;
    } 
}); 
}
radCoursesChoice();



  

