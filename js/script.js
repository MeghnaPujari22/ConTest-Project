fetch("https://kontests.net/api/v1/all").then((data)=>{
    //console.log(data);
    return data.json();//converted to object
 }).then((objectData)=>{
    console.log(objectData[0].name);
    let tableData="";
    objectData.map((values)=>{
        //tableData+=`<h1>${values.name}</h1>`;
        tableData+=` <tr>                    
        <td><a href="${values.url}">${values.name}</a></td>
        <td>${values.start_time}</td>
        <td>${values.end_time}</td>
        <td>${values.duration}</td>
        <td>${values.site}</td>
    </tr>
    `;
    });
    document.getElementById("tableContent").
    innerHTML=tableData;
})




    

