function addskills() {
    const divEle = document.getElementById("inputFields");
    const wrapper = document.createElement("div");
    const iFeild = document.createElement("input");
    iFeild.setAttribute("type", "text");
    iFeild.setAttribute("placeholder", "Enter Skill");
    wrapper.appendChild(iFeild);
    divEle.appendChild(wrapper);
}