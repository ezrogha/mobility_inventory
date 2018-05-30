$(document).ready(function(){
    Chart.defaults.global.legend.display = false;
    Chart.defaults.global.response = false;
    
    $.ajax({
        url: "includes/main_data.php",
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var genderchartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(30, 191, 174, 0.75)',
                        borderColor: 'rgba(30, 191, 174, 1)',
                        hoverBackgroundColor: 'rgba(30, 191, 174, 0.75)',
                        hoverBorderColor: 'rgba(30, 191, 174, 1)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mycanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: genderchartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });
});

$(document).ready(function(){
    Chart.defaults.global.legend.display = false;
    
    $.ajax({
        url: "includes/main_gender_data.php",
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var chartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(48, 164, 255, 0.75)',
                        borderColor: 'rgba(48, 164, 255, 1)',
                        hoverBackgroundColor: 'rgba(48, 164, 255, 0.75)',
                        hoverBorderColor: 'rgba(48, 164, 255, 1)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mygendercanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });
});

$(document).ready(function(){
    Chart.defaults.global.legend.display = false;
    
    $.ajax({
        url: "includes/main_cause_data.php",
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var chartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(246, 73, 95, 0.75)',
                        borderColor: 'rgba(246, 73, 95, 1)',
                        hoverBackgroundColor: 'rgba(246, 73, 95, 0.75)',
                        hoverBorderColor: 'rgba(246, 73, 95, 1)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mycausecanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });
});

$(document).ready(function(){
    Chart.defaults.global.legend.display = false;
    
    $.ajax({
        url: "includes/date_data.php",
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var chartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(48, 164, 255, 0.2)',
                        borderColor: 'rgba(48, 164, 255, 0.75)',
                        hoverBackgroundColor: 'rgba(48, 164, 255, 0.2)',
                        hoverBorderColor: 'rgba(48, 164, 255, 0.75)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mydatecanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });
});

$(document).ready(function(){
    Chart.defaults.global.legend.display = false;
    
    $.ajax({
        url: "includes/current_data.php",
        method: "GET",
        success: function(data){
            console.log(data);
            var label = [];
            var y = [];
            
            for(var i in data){
                label.push(data[i].label);
                y.push(data[i].y);
            }
            
            var chartdata = {
                labels: label,
                datasets: [
                    {
                        label: "",
                        backgroundColor: 'rgba(17, 122, 101, 0.75)',
                        borderColor: 'rgba(17, 122, 101, 1)',
                        hoverBackgroundColor: 'rgba(17, 122, 101, 0.75)',
                        hoverBorderColor: 'rgba(17, 122, 101, 1)',
                        data: y
                    }
                ]
            };
            var ctx = $('#mycurrentcanvas');
            
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            })
        },
        error: function(data){
            console.log(data);
        }
    });
});

