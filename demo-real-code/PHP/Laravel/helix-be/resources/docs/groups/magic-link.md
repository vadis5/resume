# Magic Link

APIs for managing Magic Link

## api/mobile/v1/magicLink

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://helix4.com/api/mobile/v1/magicLink" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"ducimus"}'

```

```javascript
const url = new URL(
    "http://helix4.com/api/mobile/v1/magicLink"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ducimus"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "Got Magic Link.",
    "data": {
        "magicLink": "https:\/\/helixtest.page.link\/?link=http:\/\/helix.westeurope.azurecontainer.io\/token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC90ZXN0OjgxXC9hcGlcL21vYmlsZVwvdjFcL21hZ2ljTGluayIsImlhdCI6MTYxODIzMzM0NCwiZXhwIjoxNjE4MjM2ODg0LCJuYmYiOjE2MTgyMzMzNDQsImp0aSI6Ikp3Q3h2WGY5QTZQQWppWHciLCJzdWIiOjIxLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.3JKTCsqmx8aizHR83l7ry5kjvbjz0SUyP7x61oIxe-I",
        "magicLinkTTL": 3540
    }
}
```
> Example response (404):

```json
{
    "success": false,
    "code": 404,
    "message": "Not Found.",
    "data": null
}
```
<div id="execution-results-GETapi-mobile-v1-magicLink" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mobile-v1-magicLink"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mobile-v1-magicLink"></code></pre>
</div>
<div id="execution-error-GETapi-mobile-v1-magicLink" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mobile-v1-magicLink"></code></pre>
</div>
<form id="form-GETapi-mobile-v1-magicLink" data-method="GET" data-path="api/mobile/v1/magicLink" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mobile-v1-magicLink', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mobile-v1-magicLink" onclick="tryItOut('GETapi-mobile-v1-magicLink');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mobile-v1-magicLink" onclick="cancelTryOut('GETapi-mobile-v1-magicLink');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mobile-v1-magicLink" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mobile/v1/magicLink</code></b>
</p>
<p>
<label id="auth-GETapi-mobile-v1-magicLink" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-mobile-v1-magicLink" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="GETapi-mobile-v1-magicLink" data-component="body" required  hidden>
<br>
</p>

</form>



