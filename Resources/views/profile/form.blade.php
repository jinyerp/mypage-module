<div>
    <form class="space-y-6" enctype="multipart/form-data" onsubmit="return false;">

        <section class="mt-6 mb-0">
            <h3 class="mx-0 mt-0 mb-1 text-xl font-bold tracking-normal leading-snug text-slate-800">
              이름
            </h3>
            <div class="text-sm" style="line-height: 1.5715;">
                가입된 회원의 이름을 변경할 수 있습니다.
            </div>
            <div class="flex flex-wrap mt-5">
              <div class="mr-2">
                <label
                  class="border-gray-200 border-solid cursor-default sr-only box-border"
                  for="username"
                  >Username</label
                >
                <input
                    wire:model="form.name"
                    id="username"
                    class="py-2 px-3 m-0 text-sm leading-5 rounded border border-solid appearance-none cursor-text box-border border-slate-200 text-slate-800 focus:border-blue-600 focus:outline-offset-2"
                    type="text"
                    style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;"
                />
              </div>
              <button
              type="submit" wire:click="update"
                class="inline-flex justify-center items-center py-2 px-3 m-0 text-sm font-medium leading-5 text-center text-indigo-500 normal-case bg-transparent bg-none rounded border border-solid transition cursor-pointer box-border border-slate-200"
                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;"
              >
                변경
              </button>
            </div>
        </section>


        <section class="mt-6 mb-0">
            <h3 class="mx-0 mt-0 mb-1 text-xl font-bold tracking-normal leading-snug text-slate-800">
                이메일
            </h3>
            <div class="text-sm" style="line-height: 1.5715;">
                등록된 회원 이메일 주소 입니다.
            </div>
            <div class="flex flex-wrap mt-5">
              <div class="mr-2">
                <label
                  class="border-gray-200 border-solid cursor-default sr-only box-border"
                  for="email"
                  >Email</label
                >
                <input
                    wire:model="form.email" readonly
                    id="email"
                    class="py-2 px-3 m-0 text-sm leading-5 rounded border border-solid appearance-none cursor-text box-border border-slate-200 text-slate-800 focus:border-blue-600 focus:outline-offset-2"
                    type="text"
                    style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;"
                />
              </div>

            </div>
        </section>

    </form>
</div>

