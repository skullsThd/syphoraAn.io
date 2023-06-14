document.addEventListener("DOMContentLoaded", function() {
  var builds = [
    { buildNumber: 1, buildName: "launch software", buildDate: "19/07/2023", expectedVersion: "1.0.1 Beta" },
 //   { buildNumber: 2, buildName: "Build Test 2", buildDate: "15/06/2023", expectedVersion: "2.0" },
//    { buildNumber: 3, buildName: "Build Test 3", buildDate: "30/01/2023", expectedVersion: "3.0" },
//    { buildNumber: 4, buildName: "Build Test 4", buildDate: "30/01/2023", expectedVersion: "4.0" }
  ];

  var previewBuilds = [
    { buildNumber: 1, buildName: "Patch Security", buildDate: "", expectedVersion: "1.0.2 Beta" },
    { buildNumber: 2, buildName: "Preview Build 2", buildDate: "", expectedVersion: "2.0.1 Beta" }
  ];

  var buildsContainer = document.getElementById("builds-container");

  builds.forEach(function(build) {
    var buildCard = document.createElement("div");
    buildCard.className = "build-card";

    var buildNumber = document.createElement("h2");
    buildNumber.textContent = "Build #" + build.buildNumber;

    var buildName = document.createElement("p");
    buildName.textContent = "Nome build: " + build.buildName;

    var buildDate = document.createElement("p");
    buildDate.textContent = "Data prevista: " + build.buildDate;

    var expectedVersion = document.createElement("p");
    expectedVersion.textContent = "Versione prevista: " + build.expectedVersion;

    var buildButton = document.createElement("button");
    buildButton.textContent = "Download";

    buildCard.appendChild(buildNumber);
    buildCard.appendChild(buildName);
    buildCard.appendChild(buildDate);
    buildCard.appendChild(expectedVersion);
    buildCard.appendChild(buildButton);

    buildsContainer.appendChild(buildCard);
  });

  var previewContainer = document.getElementById("preview-build");

  previewBuilds.forEach(function(previewBuild) {
    var buildCard = document.createElement("div");
    buildCard.className = "build-card";

    var buildNumber = document.createElement("h2");
    buildNumber.textContent = "Preview Build #" + previewBuild.buildNumber;

    var buildName = document.createElement("p");
    buildName.textContent = "Nome build: " + previewBuild.buildName;

    var buildDate = document.createElement("p");
    buildDate.textContent = "Data prevista: " + previewBuild.buildDate;

    var expectedVersion = document.createElement("p");
    expectedVersion.textContent = "Versione prevista: " + previewBuild.expectedVersion;

    var buildButton = document.createElement("button");
    buildButton.textContent = "Download";

    buildCard.appendChild(buildNumber);
    buildCard.appendChild(buildName);
    buildCard.appendChild(buildDate);
    buildCard.appendChild(expectedVersion);
    buildCard.appendChild(buildButton);

    previewContainer.appendChild(buildCard);
  });
});
