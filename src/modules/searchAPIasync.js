function searchAPI() {
  // setup elements
  const searchField = document.querySelector("#search-input");
  const resultsContainer = document.querySelector("#results-container");
  const clearSearch = document.querySelector("#clear");
  let debouncer; // declare initial state for debouncer, used to delay requests
  const doneTypingInterval = 500; // callback for timeout used for debouncer

  // Function to update the visibility of the clearSearch button
  function updateClearButtonVisibility() {
    if (searchField.value.trim() === "") {
      clearSearch.style.display = "none"; // Hide the clear button if input is empty
    } else {
      clearSearch.style.display = "inline"; // Show the clear button if input is not empty
    }
  }

  // Initial check to set button visibility on page load
  updateClearButtonVisibility();

  clearSearch.addEventListener("click", () => {
    searchField.value = ""; // Clear the value
    searchField.blur(); // Trigger blur to show placeholder
    resultsContainer.innerHTML = ""; // Clear the results
    updateClearButtonVisibility(); // Update button visibility after clearing input
  });

  searchField.addEventListener("keyup", function () {
    clearTimeout(debouncer); // count to 500ms again
    updateClearButtonVisibility(); // Update button visibility on keyup

    debouncer = setTimeout(async () => {
      // prevent overloading - async cues up promise
      let searchQuery = searchField.value.trim(); // trim whitespace from search contents

      if (searchQuery === "") {
        resultsContainer.innerHTML = "";
        return; // if no contents, empty DIV
      }

      try {
        // error-handling
        // destructure from promise resolution of fetch **responses**
        const [postResponse, pageResponse] = await Promise.all([
          fetch("/wp-json/wp/v2/posts?search=" + searchQuery),
          fetch("/wp-json/wp/v2/pages?search=" + searchQuery),
        ]);

        // destructure from promise resolution of fetch **data**, with empty array as fallback
        const postData = postResponse.ok ? await postResponse.json() : [];
        const pageData = pageResponse.ok ? await pageResponse.json() : [];

        // Clear previous results
        resultsContainer.innerHTML = "";

        if (postData.length > 0) {
          const postHtml = postData
            .map(
              (post) =>
                `<div class="result"><a href="${post.link}" class="result-link">${post.title.rendered}</a><span class='badge bg-primary rounded-pill'>Post</span></div>`
            ) // Transform each post into an HTML string
            .join(""); // Concatenate the array of HTML strings into a single string
          resultsContainer.innerHTML += postHtml;
        }

        if (pageData.length > 0) {
          const pageHtml = pageData
            .map(
              (page) =>
                `<div class="result"><a href="${page.link}" class="result-link">${page.title.rendered}</a><span class='badge bg-primary rounded-pill'>Page</span></div>`
            )
            .join("");
          resultsContainer.innerHTML += pageHtml;
        }

        // Check if there are no results for both posts and pages
        if (resultsContainer.innerHTML === "") {
          resultsContainer.innerHTML =
            '<div class="no-results" style="display: block!important"><p>No results found</p></div>';
        }
      } catch (error) {
        console.error(error);
        resultsContainer.innerHTML =
          '<div class="error"><p>There was an error fetching the results. Please try again later.</p></div>';
      }
    }, doneTypingInterval);
  });
}

export default searchAPI;
