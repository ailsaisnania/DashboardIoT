

const data = {
    time: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
    temperature: [22, 24, 23, 25, 27],
    humidity: [30, 40, 35, 50, 45],
    pressure: [1001, 1002, 1003, 1000, 999],
  };
  
  const chartInstances = []; // Array to store chart instances
  
  function createChart(chartId, chartType, xFeature, yFeature) {
    const ctx = document.getElementById(chartId).getContext('2d');
    const labels = data[xFeature];
    const yData = data[yFeature];
    
    // Generate data for scatter plot
    const scatterData = labels.map((x, index) => ({
      x: typeof x === 'number' ? x : index,
      y: yData[index],
    }));
  
    return new Chart(ctx, {
      type: chartType === 'scatter' ? 'scatter' : chartType,
      data: {
        labels: chartType === 'scatter' ? undefined : labels,
        datasets: [{
          label: `${yFeature} vs ${xFeature}`,
          data: chartType === 'scatter' ? scatterData : yData,
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: chartType === 'scatter' ? {
          x: {
            type: 'linear',
            title: { display: true, text: xFeature },
          },
          y: {
            title: { display: true, text: yFeature },
          },
        } : {
          x: { title: { display: true, text: xFeature } },
          y: { title: { display: true, text: yFeature } },
        },
      },
    });
  }
  
  // Function to add a new chart
  function addChart() {
    const chartType = document.getElementById('chartType').value;
    const xFeature = document.getElementById('xFeature').value;
    const yFeature = document.getElementById('yFeature').value;
  
    const chartId = `chart${chartInstances.length + 1}`;
    const chartContainer = document.getElementById('chartContainer');
    const canvas = document.createElement('canvas');
    canvas.id = chartId;
    canvas.width = 400;
    canvas.height = 50;
  
    chartContainer.appendChild(canvas);
  
    const chart = createChart(chartId, chartType, xFeature, yFeature);
    chartInstances.push(chart);
  }
  
  // Event listener for adding new charts
  document.getElementById('addChart').addEventListener('click', addChart);
  