const searchClient = algoliasearch("YT26PF0EK0", "5a50123da1cbf6797a3db1ec970b6cf6");

const search = instantsearch({
  indexName: "YourIndexName",
  searchClient,
  searchFunction(helper) {
    // Ensure we only trigger a search when there's a query
    if (helper.state.query) {
      helper.search();
    }
  },
});

search.addWidgets([
  instantsearch.widgets.searchBox({
    container: "#searchbox",
  }),

  instantsearch.widgets.refinementList({
    container: "#tags-list",
    attribute: "tags",
    limit: 5,
    showMore: true,
  }),

  instantsearch.widgets.hits({
    container: "#hits",
    templates: {
      item: `
      <article>
        <a href="{{ url }}">
          <strong>
            {{#helpers.highlight}}
              { "attribute": "title", "highlightedTagName": "mark" }
            {{/helpers.highlight}}
          </strong>
        </a>
        {{#content}}
          <p>{{#helpers.snippet}}{ "attribute": "content", "highlightedTagName": "mark" }{{/helpers.snippet}}</p>
        {{/content}}
      </article>
    `,
    },
  }),
]);

search.start();
