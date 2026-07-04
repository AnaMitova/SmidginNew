const SHEET_URL = "https://docs.google.com/spreadsheets/d/e/2PACX-1vRmOEF5LnYRFHQsV5O7MQ7tmY70C-hlvqfY5_LmKIBOgF3_czRWJwUCG7GwYBLyFLevdtowrxiTaSht/pub?output=csv"; // replace with your link

let cityData = {};

// Fetch data from Google Sheets
async function loadData() {
  try {
    const response = await fetch(SHEET_URL);
    const csvText = await response.text();

    // Parse CSV into rows
    const rows = csvText.split("\n").map(row => row.split(","));
    const headers = rows.shift().map(h => h.trim().toLowerCase());

    rows.forEach(row => {
      const item = {};
      headers.forEach((h, i) => item[h] = row[i]?.trim() || "");

      const city = item.city;
      const type = item.type; // buy or taste

      if (!cityData[city]) cityData[city] = { buy: [], taste: [] };
      cityData[city][type].push(item);
    });

    console.log("✅ Google Sheets data loaded:", cityData);

  } catch (err) {
    console.error("Error loading data from Google Sheets:", err);
  }
}

// Call loadData once the page loads
document.addEventListener("DOMContentLoaded", async () => {
  await loadData();

  // Enable click listeners after data is ready
  document.querySelectorAll('[data-city]').forEach(link => {
    link.addEventListener('click', async (e) => {
      e.preventDefault();
      const city = e.target.getAttribute('data-city');
      setCurrentCity(city);

      // Update title
      document.getElementById('page-title').innerText = `Buy Smidgin in ${city}, Macedonia`;

      // Load cards
      updateCards('buy', cityData[city]?.buy || []);
      updateCards('taste', cityData[city]?.taste || []);
    });
  });
});

function updateCards(sectionId, data) {
  const container = document.getElementById(sectionId);
  container.innerHTML = '';

  data.forEach(item => {
    const card = `
      <div class="flex flex-col items-center justify-center shadow-2xl rounded-xl h-[300px] w-[210px] md:h-[524px] md:w-[330px] p-3 md:p-[28px] font-montserrat bg-white">
        <div class="w-[180px] h-[150px] md:w-[274px] md:h-[240px]">
          <img src="${item.image}" class="rounded-xl w-full h-full object-cover"/>
        </div>
        <div class="flex flex-col w-full">
          <div class="flex justify-between pt-4 md:pt-7 items-start">
            <a href="${item.link}" class="font-bold underline text-[15px] md:text-xl leading-tight">${item.name}</a>
            <div class="space-x-[2px] text-[9px] md:text-base">
              <i class="fa-solid fa-star text-[#FFE600]"></i>
              <i class="fa-solid fa-star text-[#FFE600]"></i>
              <i class="fa-solid fa-star text-[#FFE600]"></i>
              <i class="fa-solid fa-star text-[#FFE600]"></i>
              <i class="fa-solid fa-star text-gray-300"></i>
            </div>
          </div>
          <div class="space-y-2 md:space-y-4 pt-3 md:pt-4 pb-3 md:pb-7 text-[10px] md:text-lg text-gray-500 leading-snug">
            <div class="flex items-start space-x-1">
              <i class="fa-solid fa-location-dot text-[12px] md:text-base"></i>
              <p>${item.address}</p>
            </div>
            <div class="flex items-center space-x-1">
              <i class="fa-solid fa-clock text-[12px] md:text-base"></i>
              <p>${item.hours}</p>
            </div>
            <div class="flex items-center space-x-1">
              <i class="fa-solid fa-phone text-[12px] md:text-base"></i>
              <p>${item.phone}</p>
            </div>
          </div>
        </div>
      </div>
    `;
    container.innerHTML += card;
  });
}
