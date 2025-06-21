<link rel="stylesheet" href="/factory/assets/css/dashboard.css">

<?php include $_SERVER['DOCUMENT_ROOT'].'/factory/includes/sidebar.php'; 
echo $_SERVER['DOCUMENT_ROOT'].'/factory/includes/sidebar.php';?>
<div class="main-content">
  <h2>Operations Dashboard</h2>
  
  <div id="summary"></div>
  <div id="chart-placeholder" style="height: 200px; background: #f2f2f2; margin: 20px 0;">[Chart Coming Soon]</div>
  <div id="lines"></div>
</div>

<script>
async function loadDashboard() {
  const res = await fetch('../../api/factory/getDashboardData.php');
  const data = await res.json();

  // Summary
  const s = data.summary;
  document.getElementById("summary").innerHTML = `
    <div>Total Lines: ${s.total_lines}</div>
    <div>Total Stations: ${s.total_stations}</div>
    <div>Active: ${s.active_stations} | Inactive: ${s.inactive_stations}</div>
    <div>Total Resources: ${s.total_resources}</div>
  `;

  // Lines & Stations
  const container = document.getElementById("lines");
  container.innerHTML = '';
  data.lines.forEach(line => {
    const stationsHTML = line.stations.map(station => `
      <li>${station.name} ${station.status == 1 ? '🟢' : '🔴'}</li>
    `).join('');
    container.innerHTML += `
      <div style="margin-bottom: 20px;">
        <h3>${line.name} [Manager: ${line.manager || 'N/A'}]</h3>
        <ul>${stationsHTML}</ul>
      </div>
    `;
  });
}

// Real-time updates
setInterval(loadDashboard, 15000);
loadDashboard();
</script>
